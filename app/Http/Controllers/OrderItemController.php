<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\OrderItem;
use Validator;
use Redirect;
use Session;

class OrderItemController extends Controller
{
    public function index(){
        

        $orderitem = OrderItem::all();
        return view('admin.partials.orderitem')
            ->with('orderitem', $orderitem);
    } 

    public function create()
    {
        return view('admin.partials.orderitem-create');
    }

    public function store(Request $request)
    {
    	$rules = array(
            'order_id'       => 'required',
            'product_id'       => 'required',
            'price'       => 'required',
            'qty'       => 'required',

        );

        $this->validate($request, $rules);


		$orderitem = new OrderItem;
		$orderitem->order_id = $request->input('order_id');
		$orderitem->product_id = $request->input('product_id');
		$orderitem->price = $request->input('price');
		$orderitem->qty = $request->input('qty');
		$orderitem->save();

        // redirect
        Session::flash('message', 'Successfully created');
        return Redirect::to('admin/orderitem');
    }
   
  

    
}
