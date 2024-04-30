<?php

namespace App\Http\Controllers\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ValidatorController extends Controller
{
    
    public function loginHandler(Request $request){
        $fieldtype = filter_var($request->login, FILTER_VALIDATE_EMAIL)? 'email': 'email';
        if($fieldtype == 'email'){
            $request->validate([
                'login'=>'required|email|exists:validators,email',
                'password'=>'required|min:5|max:20'
            ],[
                'login.required'=>'Email is required.',
                'login.email'=>'Invalid email address.',
                'login.exists'=>'Email does not exist.',
                'password.required'=>'Password is required',
            ]);
        

        }

    
    

        $creds = array(
            $fieldtype=>$request->login,
            'password'=>$request->password
        );

        if(Auth::guard('validator')-> attempt($creds)){
            return redirect()->route('validator.home');

        }else{
            session()->flash('fail', 'Incorrect Credentials');
            return redirect()->route('validator.login');
        }
           
        
    }

    public function logoutHandler(Request $request){
        Auth::guard('validator')->logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('validator.login');
    }

}
