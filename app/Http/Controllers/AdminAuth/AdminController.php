<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    //register
    public function register(){
        return view('backEnd.admin.register.register');
    }
    //register
    public function StoreRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:6',
            'confirmPassword'=>'required|min:6|same:password'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/dashboard')->with('message','Úser Registration Successfully');
    }
    //login
    public function login(){
        return view('backEnd.admin.login.login');
    }
    //storeLogin
    public function storeLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:6',
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect('/dashboard')->with('message','Login Successfully');
        }
        return redirect('/login')->with('message','Login Details is not match');
    }
    //logout
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
    //forgotPassword
    public function forgotPassword(){
        return view('backEnd.admin.password.forgot_password');
    }
}
