<?php 

class UserController extends BaseController {

    public function getIndex()
    {
        $users = User::all();

        return View::make('users.index', array('users' => $users));
    }

    public function getView($id){
        $user = User::find($id);
        $orders = Order::where('user_id',$id)->get();
        $reviews = Review::where('user_id',$id)->get();

        return View::make('users.view', array('user'=>$user,'orders'=>$orders,'reviews'=>$reviews));
    }
    public function getCreate()
    {
    	$user = new User();
    	return View::make('users.form')->with('user', $user);
    }

    public function postCreate() {
        $input = Input::all();
        $user = new User();
        if(!$user->isValid($input)){
            return Redirect::to('admin/user/create')->with('errors', $user->getError())->withInput(Input::except('password'));
        }
        else{
            $user->fill($input);
            if (Input::hasFile('picture')){
                if (Input::file('picture')->isValid()){
                    $file = Input::file('picture');

                    $destinationpath = public_path().'/profilepicture';
                    $extension = 'jpg';
                    $filename = str_random(30).".{$extension}";
                    $upload_success = Input::file('picture')->move($destinationpath, $filename);
                    if( $upload_success ) {
                        $user->picture = $filename;
                    }
                }
            }
            $user->password = Hash::make($user->password);
            $user->role = 0;
            $date = new datetime;
            $user->registration_date = $date;
            $user->last_visit = $date;
            $user->is_active = 1;
            $user->save();
            return Redirect::to('admin/user/');
        }
    }

    public function getUpdate($id) {
        $user = User::find($id);
        if ($user == null) return App::abort(404);
        return View::make('users.form')->with('user', $user);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $user = User::find($id);
        if(!$user->isValidUpdate($input)){
            return Redirect::to('admin/user/update/'.$id)->with('errors', $user->getError())->withInput(Input::except('password'));
        }
        else{
            if ($user == null) App::abort(404);
            $user->fill($input);
            if (Input::hasFile('picture')){
                if (Input::file('picture')->isValid()){
                    $file = Input::file('picture');

                    $destinationpath = public_path().'/profilepicture';
                    $extension = 'jpg';
                    $filename = str_random(30).".{$extension}";
                    $upload_success = Input::file('picture')->move($destinationpath, $filename);
                    if( $upload_success ) {
                        $user->picture = $filename;
                    }
                }
            }
            $user->save();
            return Redirect::to('admin/user');
        }
    }


    public function getDelete($id) {
        $user = User::find($id);
        if ($user == null) return App::abort(404);
        $user->delete();
        return Redirect::to('admin/user');
    }

    public function getReview(){
        $reviews = Review::all();
        return View::make('users.listreview')->with('reviews',$reviews);
    }

    public function getActivate($id){
        $user = User::find($id);
        if($user->is_active===0){
            $user->is_active = 1;    
        }
        else{
            $user->is_active = 0;       
        }
        $user->save();
         return Redirect::to('admin/user/');
    }
}

?>