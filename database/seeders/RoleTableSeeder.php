<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
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
      try {
          Role::create(['name' => Constants::Roles[0]]);
          Role::create(['name' => Constants::Roles[1]]);
          Role::create(['name' => Constants::Roles[2]]);
      }catch (\Exception $e){
          Log::error("Role Error",[$e->getMessage()]);
      }

    }
}
