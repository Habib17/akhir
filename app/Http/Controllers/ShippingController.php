<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use Redirect;
use Session;
// use App\Models\Category;
class ShippingController extends Controller
{
    public function index(){
          // return view('user.partials.home');

    	$data['navigation'] = 'shipping';
        $data['title'] = 'Cara Package';

 
           return view('user.partials.shipping', $data);
    }  
}
