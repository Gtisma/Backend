<?php

namespace App\Http\Requests\Api\Report;

use App\Domain\Api\Dto\Request\Report\ReportApprovalDto;
use App\Http\Requests\Api\BaseApiRequest;


/**
 * Class ReportRequest
 * @package App\Http\Requests\Api\Report
 * @property string report_id


 */
class ReportApprovalRequest extends BaseApiRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'report_id' => ['required','numeric']
        ];
    }


    public function convertToDto(): ReportApprovalDto
    {
        return new ReportApprovalDto($this->report_id);
    }
}
