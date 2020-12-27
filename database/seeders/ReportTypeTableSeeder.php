<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportTypeTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('report_types')->get()->count() == 0) {

            DB::table('report_types')->insert([
                ['id' => '1',
                'name' => 'Picture',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '2',
                    'name' => 'Video',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')],
                ['id' => '3',
                'name' => 'Audio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
        }

    }
}
