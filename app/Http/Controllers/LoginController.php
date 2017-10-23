<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Session;
 

class LoginController extends Controller
{
     public function loginPageLoad()
     {
     	return view('login');
     }
  
     public function userCheck(Request $request)
     {

        $user = User::where('username',$request->username)
        			  ->where('password',$request->password)
        			  ->first();
        if($user != null){
        	$userProfile = Profile::where('userId',$user->userId)
        					        ->first();

        	//LastLogin column update

        	$userLastLoginUpdate = User::find($user->userId);
        	date_default_timezone_set ('Asia/Dhaka');
        	$userLastLoginUpdate->lastLogin = date("Y-m-d H:i:s");
        	$userLastLoginUpdate->save();

        	 
            Session()->put('userFullName', $userProfile->fullname);
        	Session()->put('userId', $userProfile->userId);
        	Session()->put('userLastLogin', $userLastLoginUpdate->lastLogin);
            if($user->type == 'User'){
                Session()->put('userAuth','Yes');
        	   return view('user.home');
            }else{
                Session()->put('adminAuth','Yes');
                return view('admin.home');
            }

        }else{
        	Session()->flash('LogoinErrorMessage', "Username And Password does not match");
        	return redirect()->back();
        }

     }

     public function userHome()
     {
     	return view('user.home');
     }

     public function logout()
     {
     	Session::flush();
     	return redirect()->route('loginView');
     }
}
