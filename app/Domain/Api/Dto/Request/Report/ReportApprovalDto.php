<?php

namespace App\Domain\Api\Dto\Request\Report;

class ReportApprovalDto
{
    public $report_id;




    public function __construct(int $report_id) {
        $this->report_id = $report_id;

    }

}
