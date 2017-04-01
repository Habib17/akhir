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
        $data['category'] = Category::all();
        $data['navigation'] = 'category';
        $data['title'] = 'Category List';

        return view('admin.partials.category.category', $data);
    }  

     public function confirmation($id){
       $data['category']  = Category::find($id);;
       $data['name'] = 'Category';
        return view('admin.partials.category.category-delete', $data);
    }  



    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin.partials.category.category-create', $data);
    }

    public function store(Request $request)
    {
    	$rules = array(
            'name'       => 'required',
        );

        $this->validate($request, $rules);


		$category = new Category;
		$category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
		$category->save();

        // redirect
        //Session::flash('message', 'Successfully created');
        return Redirect::to('admin/category')->with('success', "The Category <strong>$category->name</strong> has successfully been created.");
    }

     public function edit($id)

    {
        $categories  =  Category::all();
        $category  = Category::find($id);
        if (!$category)
        {
            Redirect::to(url('admin/category'));
        }

        $data['category'] = $category;
        $data['categories'] = $categories;


        return view('admin.partials.category.category-edit', $data);

    }

     public function update(Request $request, $id)

    {
        $categories  =  Category::all();
        $category  =  Category::find($id);
        if (!$category)
        {
            Redirect::to(url('admin/category'));
        }

        $rules = array(
            'name'       => 'required',
        
        );

        $this->validate($request, $rules);
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
        $category->update();

        // redirect
        Session::flash('message', 'Successfully Update!');
        return Redirect::to('admin/category')->with('info', "The Category <strong>$category->name</strong> has successfully been updated.");

    }

    public function destroy($id)
    {
        // delete
        $category = Category::find($id);
        $category->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('admin/category');
    }
  

    
}
