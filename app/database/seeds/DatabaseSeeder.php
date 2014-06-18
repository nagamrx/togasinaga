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
		$this->call('BrandsTableSeeder');
		$this->call('SuppliersTableSeeder');
		$this->call('PromotionsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('CouriersTableSeeder');
		$this->call('ProductPicturesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('ProductSuppliesTableSeeder');
		$this->call('ReviewsTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('OrderedItemsTableSeeder');
		$this->call('CategorizingsTableSeeder');

	}


}

class BrandsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('brands')->delete();
		$date = new datetime;

		DB::table('brands')->insert(array(
			array('id' => 1,'name' => 'Samsung','description'=>'Produk terbaik dari Korea', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Nike','description'=>'Produk terbaik dari Jerman', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Puma','description'=>'Produk terbaik dari Italia', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'Toyota','description'=>'Produk terbaik dari Jepang', 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class CategoriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->delete();
		$date = new datetime;

		DB::table('categories')->insert(array(
			array('id' => 1,'name' => 'Wanita','description'=>'Pakaian untuk Wanita', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Pria','description'=>'Pakaian untuk Pria', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Anak-anak','description'=>'Pakaian untuk Anak-anak', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'Bayi','description'=>'Pakaian untuk Bayi', 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class CategorizingsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categorizings')->delete();
		$date = new datetime;

		DB::table('categorizings')->insert(array(
			array('id' => 1,'product_id' => 1,'category_id'=>2, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'product_id' => 2,'category_id'=>2, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'product_id' => 2,'category_id'=>1, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'product_id' => 3,'category_id'=>4, 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class CouriersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('couriers')->delete();
		$date = new datetime;

		DB::table('couriers')->insert(array(
			array('id' => 1,'company_name' => 'Tiki','contact_person'=>'Rangga','email'=>'rangga@tiki.com','phone_number'=>'0811772222', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'company_name' => 'JNE','contact_person'=>'Yustian','email'=>'yustian@jne.com','phone_number'=>'0811772223', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'company_name' => 'UPS','contact_person'=>'Mangindaan','email'=>'mangindaan@ups.com','phone_number'=>'0811772224', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'company_name' => 'DHL','contact_person'=>'Angga','email'=>'angga@dhl.com','phone_number'=>'0811772225', 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class OrderedItemsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('ordered_items')->delete();
		$date = new datetime;

		DB::table('ordered_items')->insert(array(
			array('id' => 1,'quantity' => 4,'subtotal_price'=>16000,'order_id'=> 2, 'product_id'=>2, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'quantity' => 3,'subtotal_price'=>15000,'order_id'=> 3, 'product_id'=>2, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'quantity' => 2,'subtotal_price'=>12000,'order_id'=> 4, 'product_id'=>1, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'quantity' => 1,'subtotal_price'=>7000,'order_id'=> 1, 'product_id'=>1, 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class OrdersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('orders')->delete();
		$date = new datetime;

		DB::table('orders')->insert(array(
			array('id' => 1,'status' => 'SHOPCHART','user_id'=>2,'courier_id'=>1,'order_date'=> new datetime('2012-01-01'),'payment_date'=> new datetime('2014-06-12'), 'payment_confirmed'=>true, 'payment_method'=>'CASH', 'totalprice'=> 17500, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'status' => 'DELIVERED','user_id'=>3,'courier_id'=>1,'order_date'=> new datetime('2012-01-02'),'payment_date'=> new datetime('2014-06-13'), 'payment_confirmed'=>false, 'payment_method'=>'CREDITCARD', 'totalprice'=> 18500, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'status' => 'REFUND','user_id'=>4,'courier_id'=>2,'order_date'=> new datetime('2012-03-01'),'payment_date'=> new datetime('2014-05-14'), 'payment_confirmed'=>false, 'payment_method'=>'CASH', 'totalprice'=> 17700, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'status' => 'SENDING','user_id'=>1,'courier_id'=>3,'order_date'=> new datetime('2012-02-01'),'payment_date'=> new datetime('2014-05-01'), 'payment_confirmed'=>true, 'payment_method'=>'CASH', 'totalprice'=> 27500, 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class ProductsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('products')->delete();
		$date = new datetime;

		DB::table('products')->insert(array(
			array('id' => 1,'name' => 'Galaxy Tab','description'=>'Produk terbaik dari Korea','rating'=> 4, 'original_price'=> 100000, 'current_price'=> 75000, 'stock'=> 4, 'num_view'=> 3, 'num_review'=> 4, 'num_order'=> 4, 'brand_id'=> 1, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'Magista','description'=>'Produk terbaik dari Jerman','rating'=> 2, 'original_price'=> 200000, 'current_price'=> 200000, 'stock'=> 3, 'num_view'=> 4, 'num_review'=> 1, 'num_order'=> 1, 'brand_id'=> 2, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'Trainer','description'=>'Produk terbaik dari Italia','rating'=> 3, 'original_price'=> 300000, 'current_price'=> 100000, 'stock'=> 2, 'num_view'=> 1, 'num_review'=> 2, 'num_order'=> 2, 'brand_id'=> 3, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'AE 86','description'=>'Produk terbaik dari Jepang','rating'=> 3, 'original_price'=> 400000, 'current_price'=> 80000, 'stock'=> 1, 'num_view'=> 2, 'num_review'=> 3, 'num_order'=> 5, 'brand_id'=> 4, 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class ProductPicturesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('product_pictures')->delete();
		$date = new datetime;

		DB::table('product_pictures')->insert(array(
			array('id' => 1,'filename' => 'galaxytab1','product_id'=>1, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'filename' => 'galaxytab2','product_id'=>1, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'filename' => 'magista','product_id'=>2, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'filename' => 'trainer','product_id'=>3, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 5,'filename' => 'ae86','product_id'=>4, 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class ProductSuppliesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('product_supplies')->delete();
		$date = new datetime;

		DB::table('product_supplies')->insert(array(
			array('id' => 1,'product_id' => 1,'supplier_id'=>1, 'date'=> new datetime('2012-01-01'), 'quantity'=>10, 'cost'=>10000, 'status'=> 'DLVRD', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'product_id' => 2,'supplier_id'=>1, 'date'=> new datetime('2012-02-01'), 'quantity'=>5, 'cost'=>5000, 'status'=> 'ORDER', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'product_id' => 2,'supplier_id'=>2, 'date'=> new datetime('2012-02-02'), 'quantity'=>15, 'cost'=>15000, 'status'=> 'REFUND', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'product_id' => 3,'supplier_id'=>4, 'date'=> new datetime('2012-04-03'), 'quantity'=>20, 'cost'=>20000, 'status'=> 'DLVRD', 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class PromotionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('promotions')->delete();
		$date = new datetime;

		DB::table('promotions')->insert(array(
			array('id' => 1,'title' => 'Lebaran','description'=>'Promosi Khusus Masa Lebaran','content'=>'Promosi Besar-besaran untuk barang-barang berikut','status'=>'BLOG', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'title' => 'Masuk Sekolah','description'=>'Promosi Khusus Masa Masuk Sekolah','content'=>'Promosi Besar-besaran untuk barang-barang berikut','status'=>'PROMO', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'title' => 'Natal','description'=>'Promosi Khusus Masa Natal','content'=>'Promosi Besar-besaran untuk barang-barang berikut','status'=>'EVENT', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'title' => 'Tahun Baru','description'=>'Promosi Khusus Masa Tahun Baru','content'=>'Promosi Besar-besaran untuk barang-barang berikut','status'=>'STATIC', 'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class ReviewsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('reviews')->delete();
		$date = new datetime;

		DB::table('reviews')->insert(array(
			array('id' => 1,'title' => 'Bagus Banget Nih!','content'=>'Best Product Evaah!','rating'=> 5, 'user_id'=> 1, 'product_id'=>1, 'flag'=>0,  'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'title' => 'Jangan Dibeli gan!','content'=>'Rusak melulu coy','rating'=> 1, 'user_id'=> 1, 'product_id'=>2, 'flag'=>0,  'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'title' => 'Mayan sih','content'=>'Banyak kekurangannya tapi harganya oke sih','rating'=> 3, 'user_id'=> 2, 'product_id'=>2, 'flag'=>0,  'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'title' => 'AMPAS JELEK K****','content'=>'ASDKJAHSKDDHAKJHD','rating'=> 2, 'user_id'=> 4, 'product_id'=>3, 'flag'=>1,  'created_at' => $date, 'updated_at' => $date)
			));
	}


}

class SuppliersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('suppliers')->delete();
		$date = new datetime;

		DB::table('suppliers')->insert(array(
			array('id' => 1,'name' => 'PT Indofood','contact_person'=>'Rangga','phone_number'=>'08117777111','email'=>'rangga@indofood.com', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'name' => 'PT Indorayon','contact_person'=>'Yustian','phone_number'=>'08117777112','email'=>'yustian@indorayon.com', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'name' => 'PT Palmia','contact_person'=>'Mangindaan','phone_number'=>'08117777113','email'=>'mangindaan@palmia.com', 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'name' => 'CV Bestar','contact_person'=>'Angga','phone_number'=>'08117777114','email'=>'angga@bestari.com', 'created_at' => $date, 'updated_at' => $date)
			));
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
			array('id' => 5,'username' => 'test','password'=>'test','picture'=>'test.jpg','first_name'=>'Test','last_name'=>'Is','birthdate'=>new datetime('1993-08-02'),'address_street'=>'Test', 'address_city'=>'Test','address_province'=> 'Test Barat','address_country'=>'Test','role'=>'admin','newsletter'=>1, 'email'=>'test@suitcommerce.com','phone_number'=>'08117304245','registration_date'=>new datetime('2012-01-01'),'last_visit'=>new datetime('2014-06-08'),'is_active'=>true, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 1,'username' => 'yogisalomo','password'=>Hash::make('1234'),'picture'=>'yogi.jpg','first_name'=>'Yogi','last_name'=>'Sinaga','birthdate'=>new datetime('1993-08-02'),'address_street'=>'Ligar Raya 41', 'address_city'=>'Bandung','address_province'=> 'Jawa Barat','address_country'=>'Indonesia','role'=>'admin','newsletter'=>1, 'email'=>'yogi.salomo@gmail.com','phone_number'=>'08117304745','registration_date'=>new datetime('2012-01-01'),'last_visit'=>new datetime('2014-06-08'),'is_active'=>true, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 2,'username' => 'haritselfahmi','password'=>Hash::make('2345'),'picture'=>'sahe.jpg','first_name'=>'Harits','last_name'=>'Elfahmi','birthdate'=>new datetime('1992-04-21'),'address_street'=>'Pejaten', 'address_city'=>'Bandung','address_province'=> 'Jawa Barat','address_country'=>'Indonesia','role'=>'admin','newsletter'=>1, 'email'=>'adilelfahmi@gmail.com','phone_number'=>'08117304746','registration_date'=>new datetime('2012-01-02'),'last_visit'=>new datetime('2014-06-09'),'is_active'=>true, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 3,'username' => 'sonnylazuardi','password'=>Hash::make('3456'),'picture'=>'sonny.jpg','first_name'=>'Sonny','last_name'=>'Lazuardi','birthdate'=>new datetime('1993-06-01'),'address_street'=>'Sombalole Street', 'address_city'=>'Johannesburg','address_province'=> 'Central South Africa','address_country'=>'South Africa','role'=>'user','newsletter'=>1, 'email'=>'sonnylazuardi@gmail.com','phone_number'=>'08117304729','registration_date'=>new datetime('2012-01-03'),'last_visit'=>new datetime('2012-02-01'),'is_active'=>false, 'created_at' => $date, 'updated_at' => $date),
			array('id' => 4,'username' => 'fathanpranaya','password'=>Hash::make('4567'),'picture'=>'fathan.jpg','first_name'=>'Fathan','last_name'=>'Pranaya','birthdate'=>new datetime('1994-03-28'),'address_street'=>'Villa Garuda Mas', 'address_city'=>'Pekanbaru','address_province'=> 'Riau','address_country'=>'Indonesia','role'=>'user','newsletter'=>0, 'email'=>'fathanpranaya@gmail.com','phone_number'=>'08117304727','registration_date'=>new datetime('2012-01-04'),'last_visit'=>new datetime('2014-05-08'),'is_active'=>true, 'created_at' => $date, 'updated_at' => $date)
			));
	}


}