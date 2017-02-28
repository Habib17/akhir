<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PaymentConfirmation;
use Validator;
use Redirect;
use Session;

class PaymentConfirmationController extends Controller
{
    public function index(){
        $paymentconfirmations = PaymentConfirmation::all();
        return view('admin.partials.paymentconfirmation')
            ->with('paymentconfirmation', $paymentconfirmations);
    }

    public function create()
    {
        return view('admin.partials.paymentconfirmation-create');
    }

    public function store(Request $request)
    {
    	$rules = array(
            'name'       => 'required',
            'bank'      => 'required',
            'nominal'       => 'required',
            'send_at'      => 'required',
            'code'       => 'required',
            'bank_account'      => 'required',
        );

        $this->validate($request, $rules);

		$paymentconfirmation = new PaymentConfirmation;
		$paymentconfirmation->name = $request->input('name');
		$paymentconfirmation->bank = $request->input('bank');
        $paymentconfirmation->nominal = $request->input('nominal');
        $paymentconfirmation->send_at = $request->input('send_at');
        $paymentconfirmation->code = $request->input('code');
        $paymentconfirmation->bank_account = $request->input('bank_account');
		$paymentconfirmation->save();

        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/paymentconfirmation');
    }
}
