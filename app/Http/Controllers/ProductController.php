<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

use Validator;
use Redirect;
use Session;

class ProductController extends Controller
{
    public function index(){
        $data['product'] = Product::all();
        $data['navigation'] = 'product';
        return view('admin.partials.product', $data);
    }

    public function create()
    {
        $categories = Category::all();

        $data['categories'] = $categories;
        return view('admin.partials.product-create', $data);

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
        $product->update();

        // redirect
        Session::flash('message', 'Successfully Update!');
        return Redirect::to('admin/product');

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

        return view('admin.partials.product-edit', $data);

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
        );

        $this->validate($request, $rules);

		$product = new Product;
		$product->name = $request->input('name');
		$product->deskription = $request->input('deskription');
		$product->code = $request->input('code');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
		$product->save();

        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/product');
    }

    public function confirmation($id){
       $data['product']  = Product::find($id);;
       $data['name'] = 'product';
        return view('admin.partials.product-delete', $data);
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
