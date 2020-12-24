<?php

namespace App\Domain\Api\Dto\Request\Report;

class ReportDto
{
    public $address;
    public $location;
    public $state_id;
    public $crime_type_id;
    public $description;
    public $report_file;




    public function __construct(string $address=null,string $location=null,int $state_id,int $crime_type_id,string $description = null, $report_file=[]) {
        $this->address = $address;
        $this->location = $location;
        $this->state_id = $state_id;
        $this->crime_type_id = $crime_type_id;
        $this->description = $description;
        $this->report_file = $report_file;
    }

}
