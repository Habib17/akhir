<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use Redirect;
use Session;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.partials.product')
            ->with('product', $products);
    }

    public function create()
    {
        return view('admin.partials.product-create');
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
}
