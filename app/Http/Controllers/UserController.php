<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //verifyEmail
    public function verifyEmail($email, $code){
        $user=User::where('email',$email)->first();
        if($user){
            $userCode = $user->userVerify->code;
            if($userCode == $code)
            {
                $user->update([
                    'email_verify'=> 'yes'
                ]);
                $user->userVerify->delete();
                return 'User Verified';
            }else{
                return 'UnAuthorized Data!';
            }
        }else{
            return 'UnAuthorized';
        }
    }
}
