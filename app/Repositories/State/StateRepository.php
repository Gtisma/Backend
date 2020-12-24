<?php

namespace App\Repositories\State;

use App\Domain\Models\State;
use App\Repositories\BaseRepository;

class StateRepository extends BaseRepository implements IStateRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return State::class;
    }
//
}
