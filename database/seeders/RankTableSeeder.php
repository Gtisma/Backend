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
                    'name' => 'Corporal',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '3',
                    'name' => 'Sergeant',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '4',
                    'name' => 'Sergeant Major',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '5',
                    'name' => 'The Inspector of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '6',
                    'name' => 'The Assistant Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '7',
                    'name' => 'The Deputy Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],

                ['id' => '8',
                    'name' => 'The Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '9',
                    'name' => 'The Chief Superintendent of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],

                ['id' => '10',
                    'name' => 'The Assistant Commissioner of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '11',
                    'name' => 'The Deputy Commissioner of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '12',
                    'name' => 'The Commissioner of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],

                ['id' => '13',
                    'name' => 'The Assistant Inspector-General of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '14',
                    'name' => 'The Deputy Inspector-General of Police',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '15',
                    'name' => 'The Inspector General',
                    'security_id' => '1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '16',
                    'name' => 'Assistant Cadre- Level 3 to 5',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '17',
                    'name' => 'Inspectorate Cadre- Level 6 to 12',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '18',
                    'name' => 'Assistant Superintendent Cadre II (ASC) Level 8',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '19',
                    'name' => 'Assistant Superintendent Cadre I (ASC)Level 9',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '20',
                    'name' => 'Deputy Superintendent Cadre (DSC) Level 10',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '21',
                    'name' => 'Superintendent Cadre (SC) Level 11',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '22',
                    'name' => 'Chief Superintendent Cadre (CSC) Level 12',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '23',
                    'name' => 'Assistant Commander (AC) Level 13',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '24',
                    'name' => 'Deputy Commander (DC) Level 14',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '25',
                    'name' => 'Chief Commander (CC) Level 15',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '26',
                    'name' => 'Assistant Commandant General (ACG) Level 16',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '27',
                    'name' => 'Deputy Commandant General (DCG) Level 17',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                ['id' => '28',
                    'name' => 'Commandant General CG Level 18',
                    'security_id' => '2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);

        }
    }
}

