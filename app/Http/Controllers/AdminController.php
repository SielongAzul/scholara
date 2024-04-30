<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use constGuards;
use constDefaults;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function loginHandler(Request $request){
        $fieldtype = filter_var($request->login, FILTER_VALIDATE_EMAIL)? 'email': 'email';
        if($fieldtype == 'email'){
            $request->validate([
                'login_id'=>'required|email|exists:admins,email',
                'password'=>'required|min:5|max:20'
            ],[
                'login_id.required'=>'Email is required.',
                'login_id.email'=>'Invalid email address.',
                'login_id.exists'=>'Email does not exist.',
                'password.required'=>'Password is required',
            ]);

        }

        $creds = array(
            $fieldtype=>$request->login_id,
            'password'=>$request->password
        );

        if(Auth::guard('admin')-> attempt($creds)){
            return redirect()->route('admin.home');

        }else{
            session()->flash('fail', 'Incorrect Credentials');
            return redirect()->route('admin.login');
        }
           
        
    }

    public function logoutHandler(Request $request){
        Auth::guard('admin')->logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('admin.login');
    }

    
}