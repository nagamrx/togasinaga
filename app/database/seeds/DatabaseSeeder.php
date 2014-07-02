<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
	}


}

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		$date = new datetime;

		DB::table('users')->insert(array(
			array(
				'id' => 1,
				'email'=>'test@togasinaga.com',
				'password'=>Hash::make('1234'),
				'picture'=>'test.jpg',
				'first_name'=>'Yogi',
				'last_name'=>'Sinaga',
				'level'=>19,
				'birthdate'=>new datetime('1993-08-02'),
				'address_street'=>'Jalan Ligar Raya',
				'address_city'=>'Bandung',
				'address_province'=> 'Jawa Barat',
				'address_country'=>'Indonesia',
				'role_id'=>1,
				'phone_number'=>'08117304245',
				'registration_date'=>new datetime('2012-01-01'),
				'last_visit'=>new datetime('2014-06-08'),
				'is_active'=>true,
				'gender'=>'Baoa',
				'birthplace'=>'Jakarta Selatan',
				'religion'=>1,
				'last_education'=>4,
				'job'=>'Mahasiswa',
				'created_at' => $date,
				'updated_at' => $date),
			array(
				'id' => 2,
				'email'=>'yogi.salomo@gmail.com',
				'password'=>Hash::make('2345'),
				'picture'=>'yogiii.jpg',
				'first_name'=>'Salomo',
				'last_name'=>'Pratama',
				'level'=>19,
				'birthdate'=>new datetime('1993-08-02'),
				'address_street'=>'Jalan Ligar Raya',
				'address_city'=>'Bandung',
				'address_province'=> 'Jawa Barat',
				'address_country'=>'Indonesia',
				'role_id'=>2,
				'phone_number'=>'08117304235',
				'registration_date'=>new datetime('2012-02-01'),
				'last_visit'=>new datetime('2014-07-08'),
				'is_active'=>true,
				'gender'=>'Baoa',
				'birthplace'=>'Jakarta Selatan',
				'religion'=>1,
				'last_education'=>4,
				'job'=>'Mahasiswa',
				'created_at' => $date,
				'updated_at' => $date),
			array(
				'id' => 3,
				'email'=>'test@gmail.com',
				'password'=>Hash::make('3456'),
				'picture'=>'test2.jpg',
				'first_name'=>'Mangontang',
				'last_name'=>'Sinaga',
				'level'=>19,
				'birthdate'=>new datetime('1993-08-02'),
				'address_street'=>'Jalan Ligar Raya',
				'address_city'=>'Bandung',
				'address_province'=> 'Jawa Barat',
				'address_country'=>'Indonesia',
				'role_id'=>3,
				'phone_number'=>'08117304945',
				'registration_date'=>new datetime('2012-03-01'),
				'last_visit'=>new datetime('2014-08-08'),
				'is_active'=>true,
				'gender'=>'Baoa',
				'birthplace'=>'Jakarta Selatan',
				'religion'=>'Kristen Protestan',
				'last_education'=>'S1',
				'job'=>'Mahasiswa',
				'created_at' => $date,
				'updated_at' => $date)
			));
	}

}