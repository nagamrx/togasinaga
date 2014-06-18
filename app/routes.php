<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// Route::get('/', function(){
// 	//if(Auth::check()){
// 	//	return Redirect::to('admin/user/index');
// 	//} else {
// 		return Redirect::to('landing');
// 	//}
	
// });

Route::get('/', 'HomeController@getLanding');
// //Group nya dibuka kalau udah bisa buat Login
// Route::group(array('before' => 'admin'), function()
// {
// 	Route::get('admin', function(){
// 		return Redirect::to('admin/user/index');
// 	});
// 	Route::controller('admin/home', 'HomeController');
// 	Route::controller('admin/user', 'UserController');
// });

// Route::get('search/{q}', 'HomeController@search');

// Route::get('login', 'SessionController@create');
// Route::get('logout', 'SessionController@destroy');

// Route::resource('sessions', 'SessionController');

// HTML::macro('nav_link', function($route, $text) {

// 	$link = explode('/', Request::path());
// 	if ($link[1] == $route)
// 		$active = "class = 'active'";
// 	else
// 		$active = '';
//   	return '<li '.$active.'><a href="'.url('admin/'.$route.'/index').'">'.$text.'</a></li>';
// });

// HTML::macro('nav_menu', function($route, $text) {
	
// 	if(Request::is("*/".$route."/*") || Request::is("*/".$route)){
// 		$active = "class = 'active'";
// 	} else {
// 		$active = '';
// 	}
//   	return '<li '.$active.'><a href="'.url('admin/'.$route).'">'.$text.'</a></li>';
// });


//Testing
/*Route::get('setpass', function() {
	$user = User::find(2);
	$user->password = Hash::make('hehehe');
	$user->save();
	return 'OK!';
});

Route::get('createdummy', function(){
	$user = User::find(3);
	$user->username = 'test';
	$user->password = Hash::make('test');
	$user->save();
	return 'OK!';
});

Route::get('fixadmin', function(){
	//harits
	$user = User::find(1);
	$user->role = "admin";
	$user->save();

	//yogi
	$user = User::find(2);
	$user->role = "admin";
	$user->save();

	//test
	$user = User::find(3);
	$user->role = "admin";
	$user->save();

	return "OK!";
});*/