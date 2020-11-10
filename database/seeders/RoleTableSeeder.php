<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Domain\Helpers\Constants as Constants;


class RoleTableSeeder extends Seeder
{

    /**
     * @throws ReflectionException
     */
    public function run()
    {
         app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
//        app()['cache']->forget( 'spatie.permission.cache' );
        Role::create( [ 'name' => Constants::Roles[0] ] );
        Role::create( [ 'name' => Constants::Roles[1] ] );
        Role::create( [ 'name' => Constants::Roles[2] ] );

    }
}
