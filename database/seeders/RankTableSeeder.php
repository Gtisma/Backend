<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RankTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('ranks')->get()->count() == 0) {

            DB::table('ranks')->insert([
                ['id' => '1',
                'name' => 'Constable',
                'security_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '2',
                    'name' => 'Lance Corporal',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '3',
                    'name' => 'Corporal',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '4',
                    'name' => 'Sergeant',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '5',
                    'name' => 'Sergeant Major',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '6',
                    'name' => 'Inspector of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '7',
                    'name' => 'Assistant Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '8',
                    'name' => 'Deputy Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '9',
                    'name' => 'Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '10',
                    'name' => 'Chief Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '11',
                    'name' => 'Assistant Commissioner of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '12',
                    'name' => 'Deputy Commissioner of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '13',
                    'name' => 'Commissioner of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '14',
                    'name' => 'Assistant Inspector-General of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '15',
                    'name' => 'Deputy Inspector-General of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '16',
                    'name' => 'Inspector General',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '17',
                    'name' => 'Assistant Cadre- Level 3 to 5',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '18',
                    'name' => 'Inspectorate Cadre- Level 6 to 12',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '19',
                    'name' => 'Assistant Superintendent Cadre II (ASC) Level 8',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '20',
                    'name' => 'Assistant Superintendent Cadre I (ASC)Level 9',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '21',
                    'name' => 'Deputy Superintendent Cadre (DSC) Level 10',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '22',
                    'name' => 'Superintendent Cadre (SC) Level 11',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '23',
                    'name' => 'Chief Superintendent Cadre (CSC) Level 12',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '24',
                    'name' => 'Assistant Commander (AC) Level 13',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '25',
                    'name' => 'Deputy Commander (DC) Level 14',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '26',
                    'name' => 'Chief Commander (CC) Level 15',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '27',
                    'name' => 'Assistant Commandant General (ACG) Level 16',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '28',
                    'name' => 'Deputy Commandant General (DCG) Level 17',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '29',
                    'name' => 'Commandant General CG Level 18',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);

        }
    }
}
