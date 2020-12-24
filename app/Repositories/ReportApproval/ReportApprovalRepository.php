<?php

namespace App\Repositories\ReportApproval;

use App\Domain\Models\ReportApproval;
use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;

class ReportApprovalRepository extends BaseRepository implements IBaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ReportApproval::class;
    }
//
}
