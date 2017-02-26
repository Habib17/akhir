<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;


class UserController extends BaseController
{
    public function index(){
          return view('user.partials.home');
    }  
    public function account(){
          return view('user.partials.account');
    }
    public function cart(){
        return view('user.partials.cart');
    }
    public function checkout(){
         return view('user.partials.checkout');
    }
    public function detail(){
         return view('user.partials.product-detail');
    }
    public function contact(){
         return view('user.partials.contact');
    }
}
