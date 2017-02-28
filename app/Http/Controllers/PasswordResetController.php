<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Validator;
use Redirect;
use Session;

class PasswordResetController extends Controller
{
    public function index(){
        

        $passwordresets = PasswordReset::all();
        return view('admin.partials.passwordreset')
            ->with('passwordreset', $passwordresets);
    }  



    public function create()
    {
        return view('admin.partials.passwordreset-create');
    }

    public function store(Request $request)
    {
    	$rules = array(
            'email'       => 'required',
            'token'      => 'required',
        );

        $this->validate($request, $rules);


		$passwordreset = new PasswordReset;
		$passwordreset->email = $request->input('email');
		$passwordreset->token = $request->input('token');
		$passwordreset->save();

        // redirect
        Session::flash('message', 'Successfully created');
        return Redirect::to('admin/passwordreset');
    }
  

    
}
