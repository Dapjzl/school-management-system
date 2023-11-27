<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
     //custom redirect
     protected function redirect()
     {
         if(Auth()->user()->utype =="ADM")
         {
             return route('admin.dashboard');
         }
         elseif(Auth()->user()->utype =="LEC")
         {
             return route('admin.dashboard');
         }
         elseif(Auth()->user()->utype =="STD")
         {
             return route('admin.dashboard');
         }
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     //override the default login function
     public function login(Request $request)
     {
         $input = $request->all();
         $this->validate($request, [
             'email'=>'required|email',
             'password'=>'required'
         ]);

         if(auth()->attempt(array('email' =>$input['email'], 'password'=>$input['password'])))
         {
             if(auth()->user()->utype =="ADM")
             {
                 session()->flash('login-success', 'Login Successful');
                 return redirect()->route('admin.dashboard');
             }
             elseif(auth()->user()->utype =="LEC")
             {
                 session()->flash('login-success', 'Login Successful');
                 return redirect()->route('admin.dashboard');
             }
             elseif(auth()->user()->utype =="STD")
             {
                 session()->flash('login-success', 'Login Successful');
                 return redirect()->route('admin.dashboard');
             }
         }
         else
         {
             return redirect()->route('login')->with('error', 'Email and password are wrong');
         }
     }
}
