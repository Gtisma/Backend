<?php

namespace App\Services;


use App\Repositories\ReportContent\ReportContentRepository;



class ReportContentService
{
    /**
     * @var ReportContentRepository
     */
    protected $reportContentRepository;

    public function __construct(ReportContentRepository $reportContentRepository)
    {
        $this->reportContentRepository = $reportContentRepository;
    }

    public function all()
    {
        return $this->reportContentRepository->all();
    }



}
