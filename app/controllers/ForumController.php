<?php 

class ForumController extends BaseController {

    public function getIndex()
    {
        $forums = Forum::all();

        return View::make('admin.forums.index', array('forums' => $forums));
    }

    public function getView($id){
        $forum = Forum::find($id);

        return View::make('admin.forums.view', array('forum'=>$forum));
    }
    public function getCreate()
    {
    	$forum = new Forum();
    	return View::make('admin.forums.form')->with('forum', $forum);
    }

    public function postCreate() {
        $input = Input::all();
        $forum = new Forum();
        if(!$forum->isValid($input)){
            return Redirect::to('admin/forum/create')->with('errors', $forum->getError())->withInput(Input::all());
        }
        else{
            $forum->fill($input);
            $forum->save();
            return Redirect::to('admin/forum/');
        }
    }

    public function getUpdate($id) {
        $forum = Forum::find($id);
        if ($forum == null) return App::abort(404);
        return View::make('admin.forums.form')->with('forum', $forum);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $forum = Forum::find($id);
        if(!$forum->isValidUpdate($input)){
            return Redirect::to('admin/forum/update/'.$id)->with('errors', $forum->getError())->withInput(Input::all());
        }
        else{
            if ($forum == null) App::abort(404);
            $forum->fill($input);
            $forum->save();
            return Redirect::to('admin/forum');
        }
    }


    public function getDelete($id) {
        $forum = Forum::find($id);
        if ($forum == null) return App::abort(404);
        $forum->delete();
        return Redirect::to('admin/forum');
    }
}

?>