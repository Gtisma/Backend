<?php

namespace App\Repositories\Role;

use App\Repositories\BaseRepository;
use Spatie\Permission\Models\Role;

class RoleRepository extends BaseRepository implements IRoleRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Role::class;
    }
}
