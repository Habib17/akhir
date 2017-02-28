<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Validator;
use Redirect;
use Session;

class PaymentMethodController extends Controller
{
    public function index(){
        $paymentmethods = PaymentMethod::all();
        return view('admin.partials.paymentmethod')
            ->with('paymentmethod', $paymentmethods);
    }

    public function create()
    {
        return view('admin.partials.paymentmethod-create');
    }

    public function store(Request $request)
    {
    	$rules = array(
            'name'       => 'required',
            'description'      => 'required',
        );

        $this->validate($request, $rules);

		$paymentmethod = new PaymentMethod;
		$paymentmethod->name = $request->input('name');
		$paymentmethod->description = $request->input('description');
		$paymentmethod->save();

        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/paymentmethod');
    }
}
