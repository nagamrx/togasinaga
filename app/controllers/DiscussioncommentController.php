<?php 

class DiscussioncommentController extends BaseController {

    public function getIndex()
    {
        $discussioncomments = DiscussionComment::all();

        return View::make('admin.discussioncomments.index', array('discussioncomments' => $discussioncomments));
    }

    public function getView($id){
        $discussioncomment = DiscussionComment::find($id);

        return View::make('admin.discussioncomments.view', array('discussioncomment'=>$discussioncomment));
    }
    public function getCreate()
    {
    	$discussioncomment = new DiscussionComment();
    	return View::make('admin.discussioncomments.form')->with('discussioncomment', $discussioncomment);
    }

    public function postCreate() {
        $input = Input::all();
        $discussioncomment = new DiscussionComment();
        if(!$discussioncomment->isValid($input)){
            return Redirect::to('admin/discussion/create')->with('errors', $discussioncomment->getError())->withInput(Input::all());
        }
        else{
            $discussioncomment->fill($input);
            $discussioncomment->save();
            return Redirect::to('admin/discussion/');
        }
    }

    public function getUpdate($id) {
        $discussioncomment = DiscussionComment::find($id);
        if ($discussioncomment == null) return App::abort(404);
        return View::make('admin.discussioncomments.form')->with('discussioncomment', $discussioncomment);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $discussioncomment = DiscussionComment::find($id);
        if(!$discussioncomment->isValidUpdate($input)){
            return Redirect::to('admin/discussion/update/'.$id)->with('errors', $discussioncomment->getError())->withInput(Input::all());
        }
        else{
            if ($discussioncomment == null) App::abort(404);
            $discussioncomment->fill($input);
            $discussioncomment->save();
            return Redirect::to('admin/discussion');
        }
    }


    public function getDelete($id) {
        $discussioncomment = DiscussionComment::find($id);
        if ($discussioncomment == null) return App::abort(404);
        $discussioncomment->delete();
        return Redirect::to('admin/discussion');
    }
}

?>