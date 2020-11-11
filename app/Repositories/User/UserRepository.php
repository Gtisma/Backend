<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepository;
use App\Domain\Models\User;
use App\Repositories\IBaseRepository;

class UserRepository extends BaseRepository implements IBaseRepository {

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
