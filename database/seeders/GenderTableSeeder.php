<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('genders')->get()->count() == 0) {

            DB::table('genders')->insert([
                ['id' => '1',
                'name' => 'Male',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '2',
                    'name' => 'Female',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ]);

        }
    }
}
