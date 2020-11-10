<?php

namespace App\Repositories\Security;

use App\Domain\Models\Security;
use App\Repositories\BaseRepository;

class SecurityRepository extends BaseRepository implements ISecurityRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Security::class;
    }
//
}
