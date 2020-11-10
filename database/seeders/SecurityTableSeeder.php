<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecurityTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('securities')->get()->count() == 0) {

            DB::table('securities')->insert([
                ['id' => '1',
                'name' => 'Police',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '2',
                    'name' => 'NSCDC',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')]
                ]);

        }
    }
}
