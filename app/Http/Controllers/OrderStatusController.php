<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\OrderStatus;
use Validator;
use Redirect;
use Session;


class OrderStatusController extends Controller
{
    public function index(){
        

        $orderstatus = OrderStatus::all();
        return view('admin.partials.orderstatus')
            ->with('orderstatus', $orderstatus);
    }  
  
  public function create()
    {
        return view('admin.partials.orderstatus-create');
    }

    public function store(Request $request)
    {
    	$rules = array(
            'name'       => 'required',
        );

        $this->validate($request, $rules);


		$orderstatus = new OrderStatus;
		$orderstatus->name = $request->input('name');
		$orderstatus->save();

        // redirect
        Session::flash('message', 'Successfully created');
        return Redirect::to('admin/orderstatus');
    }
  
    
}
