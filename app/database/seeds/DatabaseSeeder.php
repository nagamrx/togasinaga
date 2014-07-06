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
		$this->call('NewsTableSeeder');
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

class NewsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('news')->delete();
		$date = new datetime;

		DB::table('news')->insert(array(
			array(
				'id' => 1,
				'title'=>'Testing Part 1',
				'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie augue ac sollicitudin venenatis. Donec orci nibh, rhoncus at sagittis nec, consectetur sit amet elit. Nullam ultrices congue turpis, eu porta felis mattis eget. Vestibulum vestibulum cursus justo, a laoreet augue. Morbi a lacinia augue, ac elementum est. Quisque felis turpis, adipiscing in leo eu, congue consectetur erat. Vivamus non tortor a libero congue lacinia. Cras malesuada est et euismod imperdiet.

Suspendisse lacinia consectetur turpis eget mattis. Fusce quis suscipit libero. Aliquam vel felis ante. Aliquam sagittis magna eget commodo elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean eu aliquet odio, sed facilisis nulla. Suspendisse vel risus id leo tincidunt tempor non ac augue. Cras in pulvinar ante. Vivamus felis massa, elementum id orci vitae, dapibus eleifend ligula.

Etiam sagittis porta massa a varius. Proin tempor ante sit amet mi rutrum laoreet. Fusce rhoncus, dolor eu auctor posuere, magna nulla porta nisl, vel imperdiet massa diam ac tellus. Nunc interdum tortor nec felis ullamcorper aliquam. Cras lorem purus, tempor sed placerat nec, adipiscing at nisi. Aliquam sed sodales neque. Mauris interdum ipsum a lectus vulputate, sed sollicitudin ligula varius. Sed ante ante, aliquam quis ligula vestibulum, tristique laoreet justo. Nunc facilisis tellus ac nulla tincidunt, sit amet imperdiet risus elementum. Aenean elementum ipsum non felis fringilla pretium. Suspendisse at iaculis arcu. ',
				'user_id'=>'1',
				'flag'=>'0',
				'created_at' => $date,
				'updated_at' => $date),
			array(
				'id' => 2,
				'title'=>'Sinaga Itu Keren',
				'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie augue ac sollicitudin venenatis. Donec orci nibh, rhoncus at sagittis nec, consectetur sit amet elit. Nullam ultrices congue turpis, eu porta felis mattis eget. Vestibulum vestibulum cursus justo, a laoreet augue. Morbi a lacinia augue, ac elementum est. Quisque felis turpis, adipiscing in leo eu, congue consectetur erat. Vivamus non tortor a libero congue lacinia. Cras malesuada est et euismod imperdiet.

Suspendisse lacinia consectetur turpis eget mattis. Fusce quis suscipit libero. Aliquam vel felis ante. Aliquam sagittis magna eget commodo elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean eu aliquet odio, sed facilisis nulla. Suspendisse vel risus id leo tincidunt tempor non ac augue. Cras in pulvinar ante. Vivamus felis massa, elementum id orci vitae, dapibus eleifend ligula.

Etiam sagittis porta massa a varius. Proin tempor ante sit amet mi rutrum laoreet. Fusce rhoncus, dolor eu auctor posuere, magna nulla porta nisl, vel imperdiet massa diam ac tellus. Nunc interdum tortor nec felis ullamcorper aliquam. Cras lorem purus, tempor sed placerat nec, adipiscing at nisi. Aliquam sed sodales neque. Mauris interdum ipsum a lectus vulputate, sed sollicitudin ligula varius. Sed ante ante, aliquam quis ligula vestibulum, tristique laoreet justo. Nunc facilisis tellus ac nulla tincidunt, sit amet imperdiet risus elementum. Aenean elementum ipsum non felis fringilla pretium. Suspendisse at iaculis arcu. ',
				'user_id'=>'1',
				'flag'=>'0',
				'created_at' => $date,
				'updated_at' => $date),
			array(
				'id' => 3,
				'title'=>'Mantap Kali Webnya',
				'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie augue ac sollicitudin venenatis. Donec orci nibh, rhoncus at sagittis nec, consectetur sit amet elit. Nullam ultrices congue turpis, eu porta felis mattis eget. Vestibulum vestibulum cursus justo, a laoreet augue. Morbi a lacinia augue, ac elementum est. Quisque felis turpis, adipiscing in leo eu, congue consectetur erat. Vivamus non tortor a libero congue lacinia. Cras malesuada est et euismod imperdiet.

Suspendisse lacinia consectetur turpis eget mattis. Fusce quis suscipit libero. Aliquam vel felis ante. Aliquam sagittis magna eget commodo elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean eu aliquet odio, sed facilisis nulla. Suspendisse vel risus id leo tincidunt tempor non ac augue. Cras in pulvinar ante. Vivamus felis massa, elementum id orci vitae, dapibus eleifend ligula.

Etiam sagittis porta massa a varius. Proin tempor ante sit amet mi rutrum laoreet. Fusce rhoncus, dolor eu auctor posuere, magna nulla porta nisl, vel imperdiet massa diam ac tellus. Nunc interdum tortor nec felis ullamcorper aliquam. Cras lorem purus, tempor sed placerat nec, adipiscing at nisi. Aliquam sed sodales neque. Mauris interdum ipsum a lectus vulputate, sed sollicitudin ligula varius. Sed ante ante, aliquam quis ligula vestibulum, tristique laoreet justo. Nunc facilisis tellus ac nulla tincidunt, sit amet imperdiet risus elementum. Aenean elementum ipsum non felis fringilla pretium. Suspendisse at iaculis arcu. ',
				'user_id'=>'1',
				'flag'=>'0',
				'created_at' => $date,
				'updated_at' => $date)
			));
	}

}