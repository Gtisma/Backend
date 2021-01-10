<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Helpers\Constants;
use App\Domain\Models\CrimeType;
use App\Domain\Models\Report;
use App\Domain\Models\ReportContent;
use App\Domain\Models\State;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;


class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.reports.view');
    }
    public function create()
    {
        $states = State::all();
        $crimetypes = CrimeType::all();
        return view('admin.reports.addnew',compact('states','crimetypes'));
    }
    public function store(Request $request)
    {
        $ip = $this->getClientIPaddress($request);
//        $location = Location::get($ip);
        $report = new Report();
        $report->user_id= auth()->user()->id;
        $report->state_id= $request->state_id;
        $report->crime_type_id= $request->crime_type_id;
        $report->description= $request->description;
        $report->address= $request->address;
        $report->status= Constants::Status[0];
        $report->location= $ip;
        $report->save();
        $url = $this->mulitpleUploadReport($request->file('report_files'),$report->id);
        if($url) $message="Report Uploaded";
        else $message= "Report Not successfully Uploaded";
        return redirect('/admin/report')->withMessage($message);
    }
    public function getClientIPaddress(Request $request) {

        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $clientIp = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $clientIp = $forward;
        }
        else{
            $clientIp = $remote;
        }
        return $clientIp;
    }
    public function mulitpleUploadReport($reportFiles,$report_id){
        $isUploaded =false;
        foreach ($reportFiles as $reportFile){
            $filetype= explode("/", $reportFile->getMimeType())[0];
            if($filetype ==="image" || $filetype ==="img" ) $filetype= "picture";
            $id = Constants::ReportContentTpye[$filetype];
            $fileurl= $this->uploadToCloud($reportFile->getRealPath(),'reports');
            if(isset($fileurl["data"])){
            $reportcontent = new ReportContent();
            $reportcontent->file_url = $fileurl["data"];
            $reportcontent->report_type_id =$id;
            $reportcontent->report_id =$report_id;
            $reportcontent->save();
            $isUploaded =true;
            }
        }
    return $isUploaded;
    }
}

