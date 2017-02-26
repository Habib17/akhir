<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\OrderStatus;


class OrderStatusController extends BaseController
{
    public function index(){
        

        $orderstatus = OrderStatus::all();
        return view('admin.partials.orderstatus')
            ->with('orderstatus', $orderstatus);
    }  
  

    
}
