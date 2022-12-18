<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
   
    public function getDashboard(){
        $data['user']=User::all()->where('roles',0);
        $data1['admin']=User::all()->where('roles',1);
        return view('auth_views.dashboard',$data,$data1);
    }
    public function getShowLogin(){
        return view('auth_views.login_admin');
    }
    public function getlogin(Request $request){
        $user = $request->username;
        $pass = $request->password;
       if( Auth::attempt(['username' => $user, 'password' => $pass])){
            return redirect(route('show-dashboard'));
        }
        return redirect()->route('show-login')->with('error','login fail');
        return view('auth_views.dashboard');
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('show-login');
    }



    public function getLoginUser(){
         return view('auth_views.login_user');
    }
    public function getRegister(){
         return view('auth_views.register_user');
    }
    public function getLogoutUser(){
        Auth::logout();
        return redirect()->route('form-login-user');
    }
     public function loginUser(Request $request){
        $user = $request->username;
        $pass = $request->password;
       if( Auth::attempt(['username' => $user, 'password' => $pass])){
            return redirect(route('page'));
        }
        return redirect()->route('form-login-user')->with('error','login fail');
    }
    public function Register(Request $request){
        $user = new User();
        $user->username  = $request->username;
        $user->password  = bcrypt($request->password);
        $user->full_name  = $request->full_name;
        $user->roles = 0;
        $user->phone_number  = $request->phonenumber;
        $user->email  = $request->email;
        $user->save();
        return redirect()->route('form-login-user');
    }
   
}
