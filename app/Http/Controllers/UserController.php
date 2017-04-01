<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;


class UserController extends BaseController
{
    public function index(){
      $data['navigation'] = 'home';
      $data['title'] = 'Home';
          return view('user.partials.home',$data);
    }  
    public function account(){
      $data['navigation'] = 'account';
      $data['title'] = 'Account';
          return view('user.partials.account',$data);
    }
    public function cart(){
      $data['navigation'] = 'cart';
      $data['title'] = 'Cart';
        return view('user.partials.cart',$data);
    }
    public function checkout(){
      $data['navigation'] = 'checkout';
      $data['title'] = 'Checkout';
         return view('user.partials.checkout',$data);
    }
    public function detail(){
      $data['navigation'] = 'detail';
      $data['title'] = 'Detail';
         return view('user.partials.product-detail',$data);
    }
    public function contact(){
      $data['navigation'] = 'contact';
      $data['title'] = 'Contact';
         return view('user.partials.contact',$data);
    }
}
