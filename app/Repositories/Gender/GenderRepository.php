<?php

namespace App\Repositories\Gender;

use App\Domain\Models\Gender;
use App\Repositories\BaseRepository;


class GenderRepository extends BaseRepository implements IGenderRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Gender::class;
    }
//
}
