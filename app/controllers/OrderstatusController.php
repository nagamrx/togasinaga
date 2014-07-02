<?php 

class OrderstatusController extends BaseController {
    /******** ORDER **************/
    public function getIndex()
    {
        $orderstatus = OrderStatus::all();
        return View::make('orderstatus.index', array('orderstatus' => $orderstatus));
    }

    public function getCreate()
    {
    	$orderstatus = new OrderStatus();
    	return View::make('orderstatus.form')->with('orderstatus', $orderstatus);
    }

    public function postCreate() {
        $input = Input::all();
        $orderstatus = new OrderStatus();
        if(!$orderstatus->isValid($input)){
            return Redirect::to('admin/orderstatus/create')->with('errors', $orderstatus->getError())->withInput(Input::all());
        }
        else{
            $orderstatus->fill($input);
            $orderstatus->save();
            return Redirect::to('admin/orderstatus/');
        }
    }

    public function getView($id){
        $orderstatus = OrderStatus::find($id);
        $orders = Order::where('status_id',$id)->get();
        if($orderstatus == null) return App::abort(404);

        return View::make('orderstatus.view')->with('orderstatus', $orderstatus)->with('orders', $orders);
    }

    public function getUpdate($id) {
        $orderstatus = orderstatus::find($id);
        if ($orderstatus == null) return App::abort(404);
        return View::make('orderstatus.form')->with('orderstatus', $orderstatus);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $orderstatus = orderstatus::find($id);
        if(!$orderstatus->isValidUpdate($input)){
            return Redirect::to('admin/orderstatus/update/'.$id)->with('errors', $orderstatus->getError())->withInput(Input::all());
        }
        else{
            if ($orderstatus == null) App::abort(404);
            $orderstatus->fill($input);
            $orderstatus->save();
            return Redirect::to('admin/orderstatus');
        }
    }


    public function getDelete($id) {
        $orderstatus = orderstatus::find($id);
        if ($orderstatus == null) return App::abort(404);
        $orderstatus->delete();
        return Redirect::to('admin/orderstatus');
    }
}

?>