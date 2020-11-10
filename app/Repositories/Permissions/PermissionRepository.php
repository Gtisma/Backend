<?php

namespace App\Repositories\Permissions;

use App\Repositories\BaseRepository;
use Spatie\Permission\Models\Permission;


class PermissionRepository extends BaseRepository implements IPermissionRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Permission::class;
    }
}
