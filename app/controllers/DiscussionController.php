<?php 

class DiscussionController extends BaseController {

    public function getIndex()
    {
        $discussions = Discussion::all();

        return View::make('admin.discussions.index', array('discussions' => $discussions));
    }

    public function getView($id){
        $discussion = Discussion::find($id);

        return View::make('admin.discussions.view', array('discussion'=>$discussion));
    }
    public function getCreate()
    {
    	$discussion = new Discussion();
    	return View::make('admin.discussions.form')->with('discussion', $discussion);
    }

    public function postCreate() {
        $input = Input::all();
        $discussion = new Discussion();
        if(!$discussion->isValid($input)){
            return Redirect::to('admin/discussion/create')->with('errors', $discussion->getError())->withInput(Input::all());
        }
        else{
            $discussion->fill($input);
            $discussion->save();
            return Redirect::to('admin/discussion/');
        }
    }

    public function getUpdate($id) {
        $discussion = Discussion::find($id);
        if ($discussion == null) return App::abort(404);
        return View::make('admin.discussions.form')->with('discussion', $discussion);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $discussion = Discussion::find($id);
        if(!$discussion->isValidUpdate($input)){
            return Redirect::to('admin/discussion/update/'.$id)->with('errors', $discussion->getError())->withInput(Input::all());
        }
        else{
            if ($discussion == null) App::abort(404);
            $discussion->fill($input);
            $discussion->save();
            return Redirect::to('admin/discussion');
        }
    }


    public function getDelete($id) {
        $discussion = Discussion::find($id);
        if ($discussion == null) return App::abort(404);
        $discussion->delete();
        return Redirect::to('admin/discussion');
    }
}

?>