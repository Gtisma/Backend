<?php

namespace App\Repositories\ReportContent;

use App\Domain\Models\ReportContent;
use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;

class ReportContentRepository extends BaseRepository implements IBaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ReportContent::class;
    }
//
}
