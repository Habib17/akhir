<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\ProductImage;


class ProductImageController extends BaseController
{
    public function index(){
        

        $productimage = ProductImage::all();
        return view('admin.partials.productimage')
            ->with('productimage', $productimage);
    }  
  

    
}
