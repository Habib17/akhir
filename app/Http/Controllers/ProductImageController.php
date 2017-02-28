<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use Validator;
use Redirect;
use Session;



class ProductImageController extends Controller
{
    public function index(){
        

        $productimage = ProductImage::all();
        return view('admin.partials.productimage')
            ->with('productimage', $productimage);
    }  
     public function create()
    {
        return view('admin.partials.productimage-create');
    }
  	public function store(Request $request)
    {
    	$rules = array(
            'product_id'       => 'required',
            'image'      => 'required',
        );

        $this->validate($request, $rules);

		$productimage = new Productimage;
		$productimage->product_id = $request->input('product_id');
		$productimage->image = $request->input('image');
		$productimage->save();

        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/productimage');
    }

    
}
