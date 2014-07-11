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

Route::get('/', 'HomeController@getLanding');

Route::resource('sessions', 'SessionController');
Route::get('createguest','SessionController@createGuest');

 Route::group(array('before' => 'admin'), function()
 {
 	Route::get('admin', function(){
 		return Redirect::to('admin/dashboard');
 	});
 	Route::controller('admin/dashboard', 'HomeController');
 	Route::controller('admin/user', 'UserController');
 	Route::controller('admin/contactmessage', 'ContactMessageController');
 	Route::controller('admin/news', 'NewsController');
 	Route::controller('admin/forum', 'ForumController');
 	Route::controller('admin/discussion', 'DiscussionController');
 	Route::controller('admin/discussioncomment', 'DiscussioncommentController');
 });

 Route::group(array('before' => 'guest'), function()
 {
 	//Route::get('guest/', 'GuestController@getIndex');
 	Route::controller('guest','GuestController');

 });

// Route::get('search/{q}', 'HomeController@search');


Route::get('logout', 'SessionController@destroy');


HTML::macro('nav_link', function($route, $text) {

 	$link = explode('/', Request::path());
 	if ($link[1] == $route)
 		$active = "class = 'active'";
 	else
 		$active = '';
   	return '<li '.$active.'><a href="'.url('admin/'.$route.'/index').'">'.$text.'</a></li>';
 });

 HTML::macro('nav_menu', function($route, $text) {
	
 	if(Request::is("*/".$route."/*") || Request::is("*/".$route)){
 		$active = "class = 'active'";
 	} else {
 		$active = '';
 	}
   	return '<li '.$active.'><a href="'.url('guest/'.$route).'">'.$text.'</a></li>';
 });
