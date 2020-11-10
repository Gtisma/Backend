<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepository;
use App\Domain\Models\User;

class UserRepository extends BaseRepository implements IGenderRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
//
}
