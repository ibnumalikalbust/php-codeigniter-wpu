<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
	public function getFakeData() {
		$faker = \Faker\Factory::create('id_ID');
		$data['name'] = $faker->name();
		$data['address'] = $faker->address();
		$data['email'] = $faker->email();
		$data['phone'] = $faker->phoneNumber();
		return $data;
	}
}