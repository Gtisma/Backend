<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;

use App\Http\Requests\Api\Report\ReportRequest;
use App\Http\Requests\Api\Report\ReportApprovalRequest;
use App\Services\ReportService;
use phpDocumentor\Reflection\Type;

class ReportController extends Controller
{
    protected $reportService;

    public function __construct(ReportService $reportService)
    {
        $this->reportService = $reportService;
    }

    public function sendReport(ReportRequest $reportRequest){
        \Log::info("report Data Api",[typeOf($reportRequest->convertToDto()->report_file),$reportRequest->convertToDto()]);
        return successResponse($reportRequest->convertToDto());
        $sendReport = $this->reportService->sendReport($reportRequest->convertToDto());
        if(isset($sendReport["error"])) {return errorResponse($sendReport["error"],$sendReport["code"]??401);}
        return successResponse($sendReport["data"]);
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
