<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('states')->get()->count() == 0) {


            DB::table('states')->insert([
                ['id' => '1',
                'name' => 'Ekiti',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '2',
                    'name' => 'Lagos',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '3',
                    'name' => 'Ogun',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '4',
                    'name' => 'Ondo',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '5',
                'name' => 'Osun',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '6',
                'name' => 'Oyo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],

                ]);
        }

    }
}
