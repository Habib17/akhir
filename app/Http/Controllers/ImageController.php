<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\ProductImage;
class ImageController extends Controller
{

    /**
    * Create view file
    *
    * @return void
    */
    public function imageUpload()
    {
        return view('image-upload');
    }
    public function imageView()
    {
        $data['image'] = ProductImage::all();
        return view('image-view', $data);
    }
    /**
    * Manage Post Request
    *
    * @return void
    */
    public function imageUploadPost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $productimage = new ProductImage;
        $productimage->image =$imageName;
        $productimage->save();

        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }

}