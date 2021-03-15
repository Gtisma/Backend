<?php

namespace App\Services;


use App\Domain\Api\Dto\Request\Report\ReportDto;
use App\Domain\Api\Dto\Request\Report\ReportApprovalDto;
use App\Domain\Models\Report;
use App\Domain\Helpers\Constants;
use App\Domain\Models\ReportApproval;
use App\Domain\Models\ReportContent;
use App\Events\UploadCloud;
use App\Repositories\Report\ReportRepository;


class ReportService
{
    /**
     * @var ReportRepository
     */
    protected $reportRepository;

    public function __construct(ReportRepository $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }

    public function all()
    {
        return $this->reportRepository->all();
    }
    public function getReports(){
        $user = auth()->user();
        $role = $user->getRoleNames()[0];
        $reports = $this->reportRepository->with([Report::R_USER,Report::R_CRIMETYPE,Report::R_STATE,Report::R_REPORTCONTENT])->orderBy('Created_at','desc');
        if($role == Constants::Roles[2]){
           $reports=  $reports->Where([Report::USER_ID=>$user->id])->paginate(30);
        }
        elseif($role == Constants::Roles[1]){
            $reports=  $reports->Where([Report::STATE_ID=>$user->state_id])->paginate(30);
        }
        else{
            $reports = $reports->paginate(30);
        }
        return ["data"=>$reports];
    }
    public function sendReport(ReportDto $reportDto){
        $user = auth()->user();
        $report= $this->reportRepository->create([Report::USER_ID=>$user->id,Report::STATE_ID=>$reportDto->state_id,Report::CRIME_TYPE_ID=>$reportDto->crime_type_id
            ,Report::LOCATION=>$reportDto->location,Report::DESCRIPTION=>$reportDto->description,Report::ADDRESS=>$reportDto->address,
            Report::STATUS=>Constants::Status[0]]);
        event(new UploadCloud($reportDto->report_file,$report->id));
        return ["data"=>"Report Successfully Uploaded"];
    }
    public function approveReport(ReportApprovalDto $reportApprovalDto){
        $user = auth()->user();
        $role = $user->getRoleNames()[0];
        if($role == Constants::Roles[2]) {
            return ["error" => "Report cannot be approved by Eyewitness, Contact Admin"];
        }
        $report= $this->reportRepository->find($reportApprovalDto->report_id);
        if($report != null) {
            if($report->status == Constants::Status[1]){
                return ["error" => "This Report has been Approved, by an Admin"];
            }
            $report->status = Constants::Status[1];
            $report->save();
            $reportApp = new ReportApproval();
            $reportApp->user_id = $user->id;
            $reportApp->report_id = $report->id;
            $reportApp->save();
            return ["data" => "Report Successfully Approved"];
        }
        return ["error" => "Report not found for Approval"];
    }

    protected function UploadFilesto($report_file,$report_id){
        $isUploaded = false;
        for($i = 0 ; $i < count($report_file); $i++){
            if(isset($report_file[$i]["file"])){
                $typeid =  $report_file[$i]["type"] ?? "picture";
                $id = Constants::ReportContentTpye[$typeid];
                $fileurl= $this->reportRepository->uploadToCloud($report_file[$i]["file"],'reports');
                if(isset($fileurl["data"])) {
                    $reportcontent = new ReportContent();
                    $reportcontent->file_url = $fileurl["data"];
                    $reportcontent->report_type_id = $id;
                    $reportcontent->report_id = $report_id;
                    $reportcontent->save();
                    $isUploaded = true;
                }
            }
        }
      return $isUploaded;
    }



}
