<?php 

class ContactmessageController extends BaseController {

    public function getIndex()
    {
        $contactmessages = ContactMessage::all();

        return View::make('admin.contactmessages.index', array('contactmessages' => $contactmessages));
    }

    public function getCreate()
    {
        $contactmessage = new ContactMessage();
        return View::make('admin.contactmessages.form')->with('contactmessage', $contactmessage);
    }

    public function postCreate() {
        $input = Input::all();
        $contactmessage = new ContactMessage();
        if(!$contactmessage->isValid($input)){
             $response = array(
            'status' => 'failed',
            'msg' => $contactmessage->getError(),
            );
            return Response::json($response);
            //return Redirect::to('admin/contactmessage/create')->with('errors', $contactmessage->getError())->withInput(Input::all());
        }
        else{
            $contactmessage->fill($input);
            $contactmessage->status_id = 0;
            $contactmessage->save();
            $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
            return Response::json($response);
            //return Redirect::to('admin/contactmessage/');
        }
    }

    public function getUpdate($id) {
        $contactmessage = ContactMessage::find($id);
        if ($contactmessage == null) return App::abort(404);
        return View::make('admin.contactmessages.form')->with('contactmessage', $contactmessage);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $contactmessage = ContactMessage::find($id);
        if(!$contactmessage->isValidUpdate($input)){
             $response = array(
            'status' => 'failed',
            'msg' => $contactmessage->getError(),
            );
            return Response::json($response);
            //return Redirect::to('admin/contactmessage/update/'.$id)->with('errors', $contactmessage->getError())->withInput(Input::all());
        }
        else{
            if ($contactmessage == null) App::abort(404);
            $contactmessage->fill($input);
            $contactmessage->save();
            $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
            return Response::json($response);
            //return Redirect::to('admin/contactmessage');
        }
    }

    public function getDelete($id) {
        $contactmessage = ContactMessage::find($id);
        if ($article == null) return App::abort(404);
        $article->delete();
        return Redirect::to('admin/article');
    }

    /* public function putUpdatestatus($id) {
        $contactmessage = ContactMessage::find($id);
        $new_status = Input::get('status_id');
        $contactmessage->status_id = $new_status;
        $contactmessage->save();
        return Redirect::to('admin/contactmessage/index');
    }*/
}

?>