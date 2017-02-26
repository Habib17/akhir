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
        $products = Product::all();
        return view('admin.partials.product')
            ->with('product', $products);
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
    	$rules = array(
            'name'       => 'required',
            'parent_id'      => 'required',
            'slug'      => 'required',
        );

        $this->validate($request, $rules);

		$category = new Category;
		$category->name = $request->input('name');
		$category->parent_id = $request->input('parent_id');
		$category->slug = $request->input('slug');
		$category->save();

        // redirect
        Session::flash('message', 'Successfully created nerd!');
        return Redirect::to('admin/product/create');
    }
}
