<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TestingPopulationAuto extends Seeder
{
    protected $table = 'testing_population';
    protected $total = 1000;

    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < $this->total; $i++) {             
            $data['name'] = $faker->name();
            $data['address'] = $faker->address();
            $data['email'] = $faker->email();
            $phone = $faker->phoneNumber();
            $phone = preg_replace('/[^0-9]/', '', $phone);
            $phone = ($phone[0] === '0') ? '62' . substr($phone, 1) : $phone;
            $data['phone'] = $phone;
            $data['created_at'] = Time::now();
            $data['updated_at'] = Time::now();
            $data['deleted_at'] = null;
            $this->db->table($this->table)->insert($data);
        }
    }
}
