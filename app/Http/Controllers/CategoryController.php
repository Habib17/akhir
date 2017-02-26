<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use Redirect;
use Session;




class CategoryController extends Controller
{
    public function index(){
        

        $categorys = Category::all();
        return view('admin.partials.category')
            ->with('category', $categorys);
    }  



    public function create()
    {
        return view('admin.partials.category-create');
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
        Session::flash('message', 'Successfully created');
        return Redirect::to('admin/category');
    }
  

    
}
