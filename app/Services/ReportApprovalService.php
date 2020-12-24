<?php

namespace App\Services;


use App\Repositories\ReportApproval\ReportApprovalRepository;
use App\Repositories\ReportType\ReportTypeRepository;


class ReportApprovalService
{
    /**
     * @var ReportApprovalRepository
     */
    protected $reportApprovalRepository;

    public function __construct(ReportApprovalRepository $reportApprovalRepository)
    {
        $this->reportApprovalRepository = $reportApprovalRepository;
    }

    public function all()
    {
        return $this->reportApprovalRepository->all();
    }



}
