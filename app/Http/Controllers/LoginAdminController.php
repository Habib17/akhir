<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Contracts\Auth\Authenticable;
use Illuminate\Contracts\Auth\Guard;

class LoginAdminController extends Controller
{
    protected $user;
    protected $auth;

    public function __construct(Guard $auth, User $user)
    {
        $this->auth = $auth;
        $this->user = $user;

        $this->middleware('guest', ['except' => ['logout']]);
    }

    public function index(){
          $data['title'] = 'Login';
        return view('admin.partials.login', $data);
    }

    public function login(LoginRequest $request)
    {
        if ( $this->auth->attempt(['email' => $request->email, 'password'=> $request->password], $request->input('remember')))
        {
            if ( $this->auth->user()->is_admin == 1)
            return Redirect::to(url('admin/product'));
            else
            return Redirect::to(url('user'));
        }

        return Redirect::to(url('admin/login'))->withErrors(['login'=> 'Username / Password salah' ]);
    }

    public function logout()
    {
        $this->auth->logout();
        return Redirect::to(url('admin?logout'));
    }
    
}
