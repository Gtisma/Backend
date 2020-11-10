<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrimeTypeTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('crime_types')->get()->count() == 0) {

            DB::table('crime_types')->insert([
                ['id' => '1',
                'name' => 'Rape',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '2',
                    'name' => 'Kidnapping',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '3',
                    'name' => 'Murder',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '4',
                    'name' => 'Burglary',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '5',
                'name' => 'Fraud',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '6',
                'name' => 'Terrorism',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '7',
                'name' => 'Robbery',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '8',
                'name' => 'Cyber Crimes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '9',
                'name' => 'Bribery',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '10',
                'name' => 'Corruption',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '11',
                'name' => 'Money Laundering',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')]
             ]);
        }

    }
}
