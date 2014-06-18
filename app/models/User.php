<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends GenericModel implements UserInterface,RemindableInterface{

	use UserTrait, RemindableTrait;

	public $table = 'users';

	public $fillable = [
		'username',
		'password',
		'picture',
		'first_name',
		'last_name',
		'birthdate',
		'address_street',
		'address_city',
		'address_province',
		'address_country',
		'newsletter',
		'phone_number',
		'email'
	];

	public $rules = [
		'username'=> 'required|unique:users',
		'password' => 'required|between:8,25',
		'first_name'=>'required',
		'last_name'=>'required',
		'birthdate'=> 'required|date',
		'email'=> 'required|email|unique:users',
		'phone_number'=>'required'
	];

	protected $hidden = array('password', 'remember_token');

	public function getValidOrders($range){
		$count = 0;

		$orders = Order::where('user_id', '=', $this->id)->get();
		foreach($orders as $order){
			if($order->isOnRange($range)){
				$count++;
			}
		}
		return $count;
	}

	public function getMoneySpent($range){
		$orders = Order::where('user_id', '=', $this->id)->get();
		$moneyspent = 0;
		foreach($orders as $order){
			if($order->isOnRange($range)){
				$moneyspent += $order->totalprice;
			}
		}

		return $moneyspent; 
	}

	public static $range = null;

	public static function setRange($val){
		//echo "Range set with: " . $val;
		self::$range = $val;
	}

	public static function getRange(){
		return self::$range;
	}


	/*****Ternyata nggak penting
	public function setTanggallahirAttribute($tanggallahir) {
	    if ($tanggallahir) {
	        $this->attributes['birthdate'] = date('Y-m-d',(strtotime($tanggallahir)));
	    } else {
	        $this->attributes['birthdate'] = '';
	    }
	}

	public function getTanggallahirAttribute() {
	    $tmpdate = $this->attributes['birthdate'];
	    if ($tmpdate == "0000-00-00" || $tmpdate == "") {
	        return "";
	    } else {
	        return date('m/d/Y',strtotime($tmpdate));
	    }
	}*/
}
