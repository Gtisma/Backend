<?php

namespace App\Repositories\Gender;

use App\Domain\Models\Rank;
use App\Repositories\BaseRepository;
use App\Repositories\User\IRankRepository;

class GenderRepository extends BaseRepository implements IRankRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Rank::class;
    }
//
}
