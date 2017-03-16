<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use Redirect;
use Session;
// use App\Models\Category;
class LoginController extends Controller
{
    public function index(){
          // return view('user.partials.home');
           return view('user.partials.login');
    }  
}
