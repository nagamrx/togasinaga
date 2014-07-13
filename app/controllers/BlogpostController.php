<?php 

class BlogpostController extends BaseController {

    public function getIndex()
    {
        $blogposts = BlogPost::all();

        return View::make('admin.blogposts.index', array('blogposts' => $blogposts));
    }

    public function getView($id){
        $blogpost = BlogPost::find($id);

        return View::make('admin.blogposts.view', array('blogpost'=>$blogpost));
    }
    public function getCreate()
    {
    	$blogpost = new BlogPost();
    	return View::make('admin.blogposts.form')->with('blogpost', $blogpost);
    }

    public function postCreate() {
        $input = Input::all();
        $blogpost = new BlogPost();
        if(!$blogpost->isValid($input)){
            return Redirect::to('admin/blogpost/create')->with('errors', $blogpost->getError())->withInput(Input::all());
        }
        else{
            $blogpost->fill($input);
            $blogpost->save();
            return Redirect::to('admin/blogpost/');
        }
    }

    public function getUpdate($id) {
        $blogpost = BlogPost::find($id);
        if ($blogpost == null) return App::abort(404);
        return View::make('admin.blogposts.form')->with('blogpost', $blogpost);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $blogpost = BlogPost::find($id);
        if(!$blogpost->isValidUpdate($input)){
            return Redirect::to('admin/blogpost/update/'.$id)->with('errors', $blogpost->getError())->withInput(Input::all());
        }
        else{
            if ($blogpost == null) App::abort(404);
            $blogpost->fill($input);
            $blogpost->save();
            return Redirect::to('admin/blogpost');
        }
    }


    public function getDelete($id) {
        $blogpost = BlogPost::find($id);
        if ($blogpost == null) return App::abort(404);
        $blogpost->delete();
        return Redirect::to('admin/blogpost');
    }
}

?>