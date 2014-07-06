<?php 

class NewsController extends BaseController {

    public function getIndex()
    {
        $news = News::all();

        return View::make('admin.news.index', array('news' => $news));
    }

    public function getView($id){
        $news = News::find($id);

        return View::make('admin.news.view', array('news'=>$news));
    }
    public function getCreate()
    {
    	$news = new News();
    	return View::make('admin.news.form')->with('news', $news);
    }

    public function postCreate() {
        $input = Input::all();
        $news = new News();
        if(!$news->isValid($input)){
            return Redirect::to('admin/news/create')->with('errors', $news->getError())->withInput(Input::all());
        }
        else{
            $news->fill($input);
            $news->save();
            return Redirect::to('admin/news/');
        }
    }

    public function getUpdate($id) {
        $news = News::find($id);
        if ($news == null) return App::abort(404);
        return View::make('admin.news.form')->with('news', $news);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $news = News::find($id);
        if(!$news->isValidUpdate($input)){
            return Redirect::to('admin/news/update/'.$id)->with('errors', $news->getError())->withInput(Input::all());
        }
        else{
            if ($news == null) App::abort(404);
            $news->fill($input);
            $news->save();
            return Redirect::to('admin/news');
        }
    }


    public function getDelete($id) {
        $news = News::find($id);
        if ($news == null) return App::abort(404);
        $news->delete();
        return Redirect::to('admin/news');
    }
}

?>