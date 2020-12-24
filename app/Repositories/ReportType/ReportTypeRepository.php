<?php

namespace App\Repositories\ReportType;

use App\Domain\Models\ReportType;
use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;

class ReportTypeRepository extends BaseRepository implements IBaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ReportType::class;
    }
//
}
