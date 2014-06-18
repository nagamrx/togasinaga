<?php

class SessionController extends BaseController {

	public $user;

	public function __construct(User $user)	
	{
		$this->user = $user;
	}

	public function create()
	{
		if (Auth::check()) return Redirect::to('admin/dashboard');
		return View::make('session.create');
	}

	public function store()
	{
		if (!Auth::attempt(Input::only('username', 'password'))){
			return Redirect::back()->withInput()->with('alert', 'Username or password incorrect');
		}

		return Redirect::to('admin/user');
	}

	public function destroy()
	{
		Auth::logout();

		return Redirect::to('login');
	}
}