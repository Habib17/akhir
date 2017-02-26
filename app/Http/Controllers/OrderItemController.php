<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\OrderItem;


class OrderItemController extends BaseController
{
    public function index(){
        

        $orderitem = OrderItem::all();
        return view('admin.partials.orderitem')
            ->with('orderitem', $orderitem);
    }  
  

    
}
