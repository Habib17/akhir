<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;
class CrudController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $kate = Category::all();

        // load the view and pass the nerds
        return view('crud.index')
            ->with('kate', $kate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // return view('crud.create');

         $rules = array(
            'name'       => 'required',
            'parent_id'      => 'required',
            'slug'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('crud/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $category = new Category;
            $category->name       = Input::get('name');
            $category->parent_id      = Input::get('parent_id');
            $category->slug = Input::get('slug');
            $category->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('crud');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}