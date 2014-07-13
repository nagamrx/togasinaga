<?php 

class BlogController extends BaseController {

    public function getIndex()
    {
        $blogs = Blog::all();

        return View::make('admin.blogs.index', array('blogs' => $blogs));
    }

    public function getView($id){
        $blog = Blog::find($id);

        return View::make('admin.blogs.view', array('blog'=>$blog));
    }
    public function getCreate()
    {
    	$blog = new Blog();
    	return View::make('admin.blogs.form')->with('blog', $blog);
    }

    public function postCreate() {
        $input = Input::all();
        $blog = new Blog();
        if(!$blog->isValid($input)){
            return Redirect::to('admin/blog/create')->with('errors', $blog->getError())->withInput(Input::all());
        }
        else{
            $blog->fill($input);
            $blog->save();
            return Redirect::to('admin/blog/');
        }
    }

    public function getUpdate($id) {
        $blog = Blog::find($id);
        if ($blog == null) return App::abort(404);
        return View::make('admin.blogs.form')->with('blog', $blog);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $blog = Blog::find($id);
        if(!$blog->isValidUpdate($input)){
            return Redirect::to('admin/blog/update/'.$id)->with('errors', $blog->getError())->withInput(Input::all());
        }
        else{
            if ($blog == null) App::abort(404);
            $blog->fill($input);
            $blog->save();
            return Redirect::to('admin/blog');
        }
    }


    public function getDelete($id) {
        $blog = Blog::find($id);
        if ($blog == null) return App::abort(404);
        $blog->delete();
        return Redirect::to('admin/blog');
    }
}

?>