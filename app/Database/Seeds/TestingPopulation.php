<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TestingPopulation extends Seeder
{
    protected $table = 'testing_population';

    public function run()
    {
        $data =
            [
                [
                    'name' => 'Habibullah',
                    'address' => 'Probolinggo, Jawa Timur, Indonesia',
                    'email' => 'ibnumalikalbustomi@gmail.com',
                    'phone' => '6285222228090',
                    'created_at' => Time::now(),
                    'updated_at' => Time::now(),
                    'deleted_at' => null,
                ],
                [
                    'name' => 'Fahrurrozy',
                    'address' => 'Jember, Jawa Timur, Indonesia',
                    'email' => 'fahrurfazida@gmail.com',
                    'phone' => '628884088452',
                    'created_at' => Time::now(),
                    'updated_at' => Time::now(),
                    'deleted_at' => null,
                ],
            ];

        $this->db->table($this->table)->insertBatch($data);
    }
}
