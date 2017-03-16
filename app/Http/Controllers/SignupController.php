<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

// use App\Models\Category;
class SignupController extends BaseController
{
    public function index(){
          // return view('user.partials.home');
           return view('user.partials.signup');
    }  
}
