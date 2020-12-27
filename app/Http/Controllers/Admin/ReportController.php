<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Models\CrimeType;
use App\Domain\Models\State;
use App\Http\Controllers\Controller;


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
    public function store()
    {
        return view('admin.reports.addnew');
    }
}
