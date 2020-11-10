<?php

namespace App\Repositories\Rank;

use App\Domain\Models\Rank;
use App\Repositories\BaseRepository;

class RankRepository extends BaseRepository implements IRankRepository {

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
