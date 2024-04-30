<?php

namespace App\Http\Controllers\Scholarprovider;

use App\Models\Scholarprovider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ScholarproviderController extends Controller
{

    function create(Request $request){

        $request->validate([
              'pname'=>'required',
              'email'=>'required|email|unique:scholarproviders,email',
              'password'=>'required|min:5|max:30',
              'cpassword'=>'required|min:5|max:30|same:password',
  
        ]);
  
        $scholarprovider= new Scholarprovider();
        $scholarprovider->pname = $request->pname;
        $scholarprovider->email = $request->email;
        $scholarprovider->password =Hash::make($request->password);
        $save = $scholarprovider->save(); 
  
        if($save){
           return redirect()->back()->with('success', 'You successfully registered and can now access as provider.');
        }else{
           return redirect()->back()->with('fail', 'You fail to register. Try again or contact the admin.');
        }
  
     }

    public function loginHandler(Request $request){
        $fieldtype = filter_var($request->login, FILTER_VALIDATE_EMAIL)? 'email': 'email';
        if($fieldtype == 'email'){
            $request->validate([
                'email'=>'required|email|exists:scholarproviders,email',
                'password'=>'required|min:5|max:20'
            ],[
                'email.required'=>'Email is required.',
                'email.email'=>'Invalid email address.',
                'email.exists'=>'Email does not exist.',
                'password.required'=>'Password is required',
            ]);

        }

        $creds = array(
            $fieldtype=>$request->email,
            'password'=>$request->password
        );

        if(Auth::guard('scholarprovider')-> attempt($creds)){
            return redirect()->route('scholarprovider.home');

        }else{
            session()->flash('fail', 'Incorrect Credentials');
            return redirect()->route('scholarprovider.login');
        }
           
        
    }

    public function logoutHandler(Request $request){
        Auth::guard('scholarprovider')->logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('scholarprovider.login');
    }

    
}