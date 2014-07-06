<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends GenericModel implements UserInterface,RemindableInterface{
	use UserTrait, RemindableTrait;

	public $table = 'users';

	public $fillable = [
		'email',
		'password',
		'picture',
		'first_name',
		'last_name',
		'level',
		'birthdate',
		'address_street',
		'address_city',
		'address_province',
		'address_country',
		'role_id',
		'phone_number',
		'registration_date',
		'last_visit',
		'is_active',
		'gender',
		'birthplace',
		'religion',
		'last_education',
		'job',
		'newsletter',
		'phone_number'
	];

	public $rules = [
		'email'=> 'required|email|unique:users',
		'password' => 'required|between:8,25',
		'first_name'=>'required',
		'last_name'=>'required',
		'birthdate'=> 'required|date',
		'phone_number'=>'required'
	];

	protected $hidden = array('password', 'remember_token');

}
