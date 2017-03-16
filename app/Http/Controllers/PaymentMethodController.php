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
         $data['paymentmethod'] = PaymentMethod::all();
        $data['navigation'] = 'paymentmethod';
       return view('admin.partials.paymentmethod', $data);
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


    public function edit($id)
    {
        $paymentmethod = PaymentMethod::find($id);
        if(!$paymentmethod)
        {
            Redirect::to(url('admin/paymentmethod'));
        }

        $data['paymentmethod'] = $paymentmethod;

        return view('admin.partials.paymentmethod-edit',$data);
    }


    public function update(Request $request, $id)

    {
        $paymentmethod  =  PaymentMethod::find($id);
        if (!$paymentmethod)
        {
            Redirect::to(url('admin/paymentmethod'));
        }

        $rules = array(
            'name'       => 'required',
            'description'      => 'required',
        
        );

        $this->validate($request, $rules);
        $paymentmethod->name = $request->input('name');
        $paymentmethod->description = $request->input('description');
        $paymentmethod->update();

        // redirect
        Session::flash('message', 'Successfully Update!');
        return Redirect::to('admin/paymentmethod');
         
    }

    public function confirmation($id){
       $data['paymentmethod']  = PaymentMethod::find($id);;
       $data['name'] = 'paymentmethod';
        return view('admin.partials.paymentmethod-delete', $data);
    }  


       public function destroy($id)
    {
        // delete
        $paymentmethod = PaymentMethod::find($id);
        $paymentmethod->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('admin/paymentmethod');
    }

}
