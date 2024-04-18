<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Mail\UserVerification;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Session;
use Illuminate\Support\Str;

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
        $code= sha1(rand(1000,8000));

        $user->userVerify()->create([
            'code' => $code
        ]);

        $generatedUrl = route('verifyEmail',[$user->email,$code]);

        Mail::to($user->email)->send(new UserVerification($generatedUrl));

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
            $user = Auth::user();
            if ($user->email_verify === 'yes') {
                return redirect('/dashboard')->with('message','Login Successfully');
            } else {
                Auth::logout();
                return redirect('/login')->with('message','Your email is not verified');
            }
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
    //forgot Password
    public function forgot(Request $request){
        $user = User::where('email',$request->email)->get();
        foreach ($user as  $value) {
            # code...
        }
        if (count($user) > 0) {
            $token = Str::random(40);
            $domain = URL::to('/');
            $url = $domain.'/reset/password?token='.$token;
            $data['url'] = $url;
            $data['email'] = $request->email;
            $data['title'] = 'Password Reset';
            $data['nody'] = 'Please Click the link below to reset your Password';
            Mail::send('email.forgetPasswordMail',['data'=>$data],function($message) use ($data){
                $message->to($data['email'])->subject($data['title']);
            });
            $dateTime = Carbon::now()->format('Y-m-d H:i:s');
            $passwordReset = new PasswordReset();
            $passwordReset->email = $request->email;
            $passwordReset->token = $token;
            $passwordReset->user_id = $value->id;
            $passwordReset->created_at = $dateTime;
            $passwordReset->save();
            return back()->with('message','Please cjeck your email inbox to reset your email');
        } else {
            return redirect('/forgot/password')->with('message','Email Does not Exits');
        }
    }
    //resetPassword
    public function resetPassword(Request $request){
        $resetData = PasswordReset::where('token',$request->token)->get();
        if (isset($request->token) && count($resetData) > 0) {
            $user = User::where('id',$resetData[0]['user_id'])->get();
            foreach ($user as $user_data) {
                # code...
            }
            return view('backEnd.admin.password.reset-password',compact('user_data'));
        }else{
            return view('backEnd.admin.password.404');
        }
    } 
    //resetUserPassword
    public function resetUserPassword(Request $request){
        $request->validate([
            'password'=>'required|min:6|max:8',
            'confirmpassword'=>'required|same:password'
        ]);
        try {
            $user = User::find($request->user_id);
            $user->password = bcrypt($request->password);
            $user->save();
            PasswordReset::where('email',$request->user_email)->delete();
            return redirect('/login')->with('message','Password Reset Successfully');
        } catch (\Throwable $th) {
            return back()->with('message','Fail to Reset Pasword');
        }
    }
}
