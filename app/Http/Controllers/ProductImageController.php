<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use Validator;
use Redirect;
use Session;
use App\Http\Requests;
use Image;


class ProductImageController extends Controller
{
    public function index(){
        
        $data['productimage'] = ProductImage::all();
        $data['navigation'] = 'productimage';
        return view('admin.partials.productimage', $data);

    }  
     public function create()
    {
        return view('admin.partials.productimage-create');
    }
  	public function store(Request $request)
    {
    	$rules = array(
            'product_id'       => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        );

        $this->validate($request, $rules);

		$productimage = new Productimage;
		$productimage->product_id = $request->input('product_id');
	    $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $productimage = new ProductImage;
        $productimage->image =$imageName;
        $productimage->save();

        // redirect
        

        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/productimage');
    }
  public function edit($id)

    {
        $productimage  = ProductImage::find($id);
        if (!$productimage)
        {
            Redirect::to(url('admin/productimage'));
        }

        $data['productimage'] = $productimage;


        return view('admin.partials.productimage-edit', $data);

    }

     public function update(Request $request, $id)

    {
        $productimage  =  ProductImage::find($id);
        if (!$productimage)
        {
            Redirect::to(url('admin/productimage'));
        }

        $rules = array(
            'product_id'       => 'required',
            'image'      => 'required',
        
        );

        $this->validate($request, $rules);
        $productimage->product_id = $request->input('product_id');
        $productimage->image = $request->input('image');
        $productimage->update();

        // redirect
        Session::flash('message', 'Successfully Update!');
        return Redirect::to('admin/productimage');

    }

        public function confirmation($id){
       $data['productimage']  = ProductImage::find($id);;
       $data['name'] = 'productimage';
        return view('admin.partials.productimage-delete', $data);
    }  


       public function destroy($id)
    {
        // delete
        $productimage = ProductImage::find($id);
        $productimage->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('admin/productimage');
    }

    
}
