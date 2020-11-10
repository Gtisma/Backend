<?php
namespace Database\Seeders;

use App\Domain\Helpers\Constants;
use App\Domain\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
	   $user = User::create([
                User::LAST_NAME => 'Admin',
                User::FIRST_NAME => 'Gtisma',
                User::EMAIL => 'admin@gtisma.com',
                User::PHONE => '08012345678',
                User::PASSWORD => bcrypt('adminpassword')]);

            $user->assignRole(Constants::Roles[0]);
        }


}
