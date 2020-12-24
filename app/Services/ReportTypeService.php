<?php

namespace App\Services;


use App\Repositories\ReportType\ReportTypeRepository;


class ReportTypeService
{
    /**
     * @var ReportTypeRepository
     */
    protected $reportTypeRepository;

    public function __construct(ReportTypeRepository $reportTypeRepository)
    {
        $this->reportTypeRepository = $reportTypeRepository;
    }

    public function all()
    {
        return $this->reportTypeRepository->all();
    }



}
