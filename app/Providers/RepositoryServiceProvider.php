<?php

namespace App\Providers;

use App\Repositories\Permissions\IPermissionRepository;
use App\Repositories\Permissions\IRoleRepository;
use App\Repositories\Permissions\PermissionRepository;
use App\Repositories\Role\RoleRepository;
use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::singleton(IUserRepository::class, UserRepository::class);
        App::singleton(IRoleRepository::class, RoleRepository::class);
        App::singleton(IPermissionRepository::class, PermissionRepository::class);
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
