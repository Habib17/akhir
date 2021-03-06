<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Validator;
use Redirect;
use Session;
use Image;

class ProductController extends Controller
{
    public function index(){
        $data['product'] = Product::all();
        $data['navigation'] = 'product';
        $data['title'] = 'Product List';
        return view('admin.partials.product.product', $data);
    }

    public function create()
    {
        $categories = Category::all();

        $data['categories'] = $categories;
        return view('admin.partials.product.product-create', $data);

    }


    public function update(Request $request, $id)

    {
        $product  = Product::find($id);
        if (!$product)
        {
            Redirect::to(url('admin/product'));
        }

        $rules = array(
            'name'       => 'required',
            'deskription'      => 'required',
            'code'      => 'required',
            'category_id'      => 'required',
            'price'      => 'required',
            'qty'      => 'required',
        );

        $this->validate($request, $rules);

    
        $product->name = $request->input('name');
        $product->deskription = $request->input('deskription');
        $product->code = $request->input('code');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        
        $file = $request->file('image');

            if($file != ""){
                $ext = $file->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' .$ext;
                $image = Image::make($request->file('image'));
                $image->resize(120, 120);
                if ( $image->save(base_path().'/public/uploads/'. $fileName) )
                {
                    $product->image = $fileName;
                }
                //$path = public_path('uploads/' . $fileName);
                //Image::make($file->getRealPath())->resize(120, 120)->save($path);
            }


        
        // redirect
      //  Session::flash('success', 'Successfully Update!');
       
        return Redirect::to('admin/product')->with('info', "The product <strong>$product->name</strong> has successfully been updated.");

    }

    public function edit($id)

    {
        $product  = Product::find($id);
        if (!$product)
        {
            Redirect::to(url('admin/product'));
        }

        $data['product'] = $product;

        $categories = Category::all();
        $data['categories'] = $categories;

        return view('admin.partials.product.product-edit', $data);

    }

    public function store(Request $request)
    {
    	$rules = array(
            'name'       => 'required',
            'deskription'      => 'required',
            'code'      => 'required',
            'category_id'      => 'required',
            'price'      => 'required',
            'qty'      => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        );

        $this->validate($request, $rules);

		$product = new Product;
		$product->name = $request->input('name');
		$product->deskription = $request->input('deskription');
		$product->code = $request->input('code');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $file = $request->file('image');

            if($file != ""){
                $ext = $file->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' .$ext;
                $image = Image::make($request->file('image'));
                $image->resize(120, 120);
                if ( $image->save(base_path().'/public/uploads/'. $fileName) )
                {
                    $product->image = $fileName;
                }
                //$path = public_path('uploads/' . $fileName);
                //Image::make($file->getRealPath())->resize(120, 120)->save($path);
            }

        $product->save();


        // redirect
        // Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/product')->with('success', "The product <strong>$product->name</strong> has successfully been created.");
    }

    public function confirmation($id){
       $data['product']  = Product::find($id);;
       $data['name'] = 'product';
        return view('admin.partials.product.product-delete', $data);
    }  


       public function destroy($id)
    {
        // delete
        $product = Product::find($id);
        $product->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('admin/product');
    }
}
