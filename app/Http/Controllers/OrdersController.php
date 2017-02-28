<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Orders;
use Validator;
use Redirect;
use Session;



class OrdersController extends Controller
{
    public function index(){
        

        $orders = Orders::all();
        return view('admin.partials.order')
            ->with('order', $orders);
    }  

  public function create()
    {
        return view('admin.partials.order-create');
    }

  public function store(Request $request)
    {
    	$rules = array(
           'code'       => 'required',
			'order_at'       => 'required',
			'customer_id'       => 'required',
			'name'       => 'required',
			'address'       => 'required',
			'district_id'       => 'required',
			'district_id'       => 'required',
			'city_id'       => 'required',
			'province_id'       => 'required',
			'country_id'       => 'required',
			'postalcode'       => 'required',
			'phone'       => 'required',
			'payment_total'       => 'required',
			'payment_method_id'       => 'required',
			'order_status_id'       => 'required',
			'price_total'       => 'required',
			'shipcost'       => 'required',

        );

        $this->validate($request, $rules);


		$orders = new Orders;
		$orders->code = $request->input('code');
		$orders->order_at = $request->input('order_at');
		$orders->customer_id = $request->input('customer_id');
		$orders->name = $request->input('name');
		$orders->address = $request->input('address');
		$orders->district_id = $request->input('district_id');
		$orders->city_id = $request->input('city_id');
		$orders->province_id = $request->input('province_id');
		$orders->country_id = $request->input('country_id');
		$orders->postalcode = $request->input('postalcode');
		$orders->phone = $request->input('phone');
		$orders->payment_total = $request->input('payment_total');
		$orders->payment_method_id = $request->input('payment_method_id');
		$orders->order_status_id = $request->input('order_status_id');
		$orders->price_total = $request->input('price_total');
		$orders->shipcost = $request->input('shipcost');

		$orders->save();

        // redirect
        Session::flash('message', 'Successfully created');
        return Redirect::to('admin/orders');
    }
  

    
}
