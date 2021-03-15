<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Helpers\Constants;
use App\Domain\Models\Report;
use App\Domain\Models\User;
use App\Http\Controllers\Controller;


class HomeController extends Controller
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
        $user = auth()->user();
        $role = $user->getRoleNames()[0];

        if($role === Constants::Roles[1]) {

            $totalreport = Report::where([Report::STATE_ID => $user->state_id])->count();
            $pendingreport = Report::where([Report::STATE_ID => $user->state_id,'status'=> 'pending'])->count();
            $approvedreport = Report::where([Report::STATE_ID => $user->state_id,'status'=> 'confirmed'])->count();
            $rapecases = Report::where('crime_type_id', '1')->count();
            $kidnapcases = Report::where('crime_type_id', '2')->count();
            $totaleyewitness = User::whereHas("roles", function ($q) {
                $q->where("name", Constants::Roles[2]);
            })->where(User::STATE_ID, $user->state_id)->count();
            $reports = Report::where([Report::STATE_ID => $user->state_id])->orderBy('created_at', 'DESC')->take(5)->get();
        }else {
            $totalreport = Report::count();
            $pendingreport = Report::where('status', 'pending')->count();
            $approvedreport = Report::where('status', 'confirmed')->count();
            $rapecases = Report::where('crime_type_id', '1')->count();
            $kidnapcases = Report::where('crime_type_id', '2')->count();
            $totaleyewitness = User::whereHas("roles", function ($q) {
                $q->where("name", Constants::Roles[2]);
            })->count();
            $reports = Report::orderBy('created_at', 'DESC')->take(5)->get();
        }
        return view('admin.home.dashboard',compact('totalreport','totaleyewitness','reports','pendingreport','approvedreport','rapecases','kidnapcases'));
    }
}
