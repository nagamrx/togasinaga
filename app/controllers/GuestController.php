<?php

class GuestController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getIndex(){
		$news = News::all();

		$dcomments = DiscussionComment::orderBy('created_at','desc')->get();
		$bposts = BlogPost::orderBy('created_at','desc')->get();
		return View::make('guest.index', array('news'=>$news,'dcomments'=>$dcomments, 'bposts'=>$bposts));
	}

	public function getReferences(){
		return View::make('guest.reference');
	}
	public function getAboutus(){
		return View::make('guest.about');
	}

	public function postSendcontactmessage(){
		$input = Input::all();
		$contact_message = new ContactMessage();
		if(!$contact_message->isValid($input)){
			 $response = array(
            'status' => 'failed',
            'msg' => $contact_message->getError(),
            );
            return Response::json($response);
		}
		else{
			$contact_message->fill($input);
			$contact_message->save();			
            $response = array(
                'status' => 'success',
                'msg' => 'Pesan Sudah Dikirim',
            );
            return Response::json($response);
		}
	}
}
