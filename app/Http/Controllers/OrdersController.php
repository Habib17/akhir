<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Orders;


class OrdersController extends BaseController
{
    public function index(){
        

        $orders = Orders::all();
        return view('admin.partials.order')
            ->with('order', $orders);
    }  
  

    
}
