<?php

namespace App\Repositories\Report;

use App\Domain\Models\Report;
use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;

class ReportRepository extends BaseRepository implements IBaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Report::class;
    }
//
}
