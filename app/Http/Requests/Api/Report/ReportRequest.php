<?php

namespace App\Http\Requests\Api\Report;

use App\Domain\Api\Dto\Request\Report\ReportDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class ReportRequest
 * @package App\Http\Requests\Api\Report
 * @property string address
 * @property string location
 * @property int state_id
 * @property int crime_type_id
 * @property string description
 * @property array report_file

 */
class ReportRequest extends BaseApiRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address' => [ 'min:10'],
            'location' => ['min:10'],
            'state_id' => 'required',
            'crime_type_id' => 'required',
            'description' => ['min:10'],
            'report_files' => [
                'type' => 'required|string',
                'file' => 'required|file',
                'array']
        ];
    }


    public function convertToDto(): ReportDto
    {
        return new ReportDto($this->address, $this->location,$this->state_id,$this->crime_type_id,$this->description,$this->report_file);
    }
}
