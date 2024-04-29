<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function verifyEmail($email, $code){
        $user = User::where('email', $email)->first();
        if ($user) {
            $userCode = $user->userVerify->code;
            if ($userCode == $code) {
                $user->email_verify = 'yes'; 
                $user->save(); 
                $user->userVerify->delete();
                return 'User Verified';
            } else {
                return 'UnAuthorized Data!';
            }
        } else {
            return 'UnAuthorized';
        }
    }
    
}
