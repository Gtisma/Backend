<?php

namespace App\Providers;

use App\Repositories\Role\IRoleRepository;
use App\Repositories\Role\RoleRepository;
use App\Repositories\Permissions\IPermissionRepository;
use App\Repositories\Permissions\PermissionRepository;
use App\Repositories\Gender\IGenderRepository;
use App\Repositories\Gender\GenderRepository;
use App\Repositories\State\StateRepository;
use App\Repositories\State\IStateRepository;
use App\Repositories\User\UserRepository;
use App\Repositories\User\IUserRepository;
use App\Repositories\Rank\RankRepository;
use App\Repositories\Rank\IRankRepository;
use App\Repositories\Security\SecurityRepository;
use App\Repositories\Security\ISecurityRepository;
use App\Repositories\CrimeType\CrimeTypeRepository;
use App\Repositories\CrimeType\ICrimeTypeRepository;
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
        App::singleton(IGenderRepository::class, GenderRepository::class);
        App::singleton(IStateRepository::class, StateRepository::class);
        App::singleton(IRoleRepository::class, RoleRepository::class);
        App::singleton(IPermissionRepository::class, PermissionRepository::class);
        App::singleton(IUserRepository::class, UserRepository::class);
        App::singleton(IRankRepository::class, RankRepository::class);
        App::singleton(ISecurityRepository::class, SecurityRepository::class);
        App::singleton(ICrimeTypeRepository::class, CrimeTypeRepository::class);
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
