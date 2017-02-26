<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\AdminUser;


class AdminUserController extends BaseController
{
    public function index(){
        

        $adminuser = AdminUser::all();
        return view('admin.partials.adminuser')
            ->with('adminuser', $adminuser);
    }  
  

    
}
