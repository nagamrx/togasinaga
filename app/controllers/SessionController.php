<?php

class SessionController extends BaseController {

	public $user;

	public function __construct(User $user)	
	{
		$this->user = $user;
	}

	public function create()
	{
		if (Auth::check()) return true;
		return View::make('session.create');
	}

	public function store()
	{
		if (!Auth::attempt(Input::only('email', 'password'))){
			return Redirect::back()->withInput()->with('alert', 'Email or password incorrect');
		}
		else {
			if(!Auth::user()->is_active){
				return Redirect::back()->withInput()->with('alert', 'User is Not Active anymore');
			}
			else {
				if(Auth::user()->role_id=== 1) { //Admin
					return View::make('layouts.master');
				}
				else if(Auth::user()->role_id=== 2) { //Pengurus
					return 'Buat Laman Pengurus';
				}
				else{ //User Biasa
					return 'Buat Laman User Biasa';
				}
			}
		}
	}

	public function destroy()
	{
		Auth::logout();

		return Redirect::to('login');
	}

	public function createGuest(){
		Session::put('role','guest');
		return 'Terbuatlah sebuah '.Session::get('role');
	}
}