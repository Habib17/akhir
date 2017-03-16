<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\PaymentMethod;
use App\Models\OrderStatus;
use Validator;
use Redirect;
use Session;



class OrdersController extends Controller
{
    public function index(){
        $data['orders'] = Orders::all();
        $data['navigation'] = 'orders';
        return view('admin.partials.order', $data);


    }  

  public function create()
    {
    	$data['provinces'] = Province::all();
    	$data['paymentmethods'] = PaymentMethod::all();
    	$data['orderstatuss'] = OrderStatus::all();
        return view('admin.partials.order-create', $data);
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
			'city_id'       => 'required',
			'province_id'       => 'required',
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

       public function confirmation($id){
       $data['orders']  = Orders::find($id);;
       $data['name'] = 'orders';
        return view('admin.partials.order-delete', $data);
    }  


       public function destroy($id)
    {
        // delete
        $orders = Orders::find($id);
        $orders->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('admin/orders');
    }
  

    public function edit($id)

    {
        $orders  = Orders::find($id);
        if (!$orders)
        {
            Redirect::to(url('admin/orders'));
        }

        $data['orders'] = $orders;
        $data['provinces'] = Province::all();
        $data['city'] = City::all();
        $data['district'] = District::all();
        $data['paymentmethods'] = PaymentMethod::all();
        $data['orderstatuss'] = OrderStatus::all();
        return view('admin.partials.order-edit', $data);

    }

     public function update(Request $request, $id)

    {
        $orders  =  Orders::find($id);
        if (!$orders)
        {
            Redirect::to(url('admin/orders'));
        }

        $rules = array(
           'code'       => 'required',
			'order_at'       => 'required',
			'customer_id'       => 'required',
			'name'       => 'required',
			'address'       => 'required',
			'district_id'       => 'required',
			'city_id'       => 'required',
			'province_id'       => 'required',
			'postalcode'       => 'required',
			'phone'       => 'required',
			'payment_total'       => 'required',
			'payment_method_id'       => 'required',
			'order_status_id'       => 'required',
			'price_total'       => 'required',
			'shipcost'       => 'required',

        
        );

        $this->validate($request, $rules);
		$orders->code = $request->input('code');
		$orders->order_at = $request->input('order_at');
		$orders->customer_id = $request->input('customer_id');
		$orders->name = $request->input('name');
		$orders->address = $request->input('address');
		$orders->district_id = $request->input('district_id');
		$orders->city_id = $request->input('city_id');
		$orders->province_id = $request->input('province_id');
		$orders->postalcode = $request->input('postalcode');
		$orders->phone = $request->input('phone');
		$orders->payment_total = $request->input('payment_total');
		$orders->payment_method_id = $request->input('payment_method_id');
		$orders->order_status_id = $request->input('order_status_id');
		$orders->price_total = $request->input('price_total');
		$orders->shipcost = $request->input('shipcost');
        $orders->update();

        // redirect
        Session::flash('message', 'Successfully Update!');
        return Redirect::to('admin/orders');

    }
}
