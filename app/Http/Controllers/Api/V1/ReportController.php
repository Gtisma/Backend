<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;

use App\Http\Requests\Api\Report\ReportRequest;
use App\Http\Requests\Api\Report\ReportApprovalRequest;
use App\Services\ReportService;

class ReportController extends Controller
{
    protected $reportService;

    public function __construct(ReportService $reportService)
    {
        $this->reportService = $reportService;
    }

    public function sendReport(ReportRequest $reportRequest){
        \Log::info("report Data Api",[$reportRequest->convertToDto()]);
        $sendReport = $this->reportService->sendReport($reportRequest->convertToDto());
        if(isset($sendReport["error"])) {return errorResponse($sendReport["error"],$sendReport["code"]??401);}
        return successResponse($sendReport["data"]);
    }
    public function sendReport2(ReportRequest $reportRequest){
        \Log::info("report Data Api 2",[$reportRequest->convertToDto()]);
        return successResponse($reportRequest->convertToDto());

    }
    public function approveReport(ReportApprovalRequest $reportApprovalRequest){
        $sendReport = $this->reportService->approveReport($reportApprovalRequest->convertToDto());
        if(isset($sendReport["error"])) {return errorResponse($sendReport["error"],$sendReport["code"]??401);}
        return successResponse($sendReport["data"]);
    }
    public function viewReport(){
        $getReport = $this->reportService->getReports();
        if(isset($getReport["error"])) {return errorResponse($getReport["error"],$getReport["code"]??401);}
        return successResponse($getReport["data"]);
    }





}
