<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{


    //Registration
    function create(Request $request){
// 'variable name => validations'
        $request->validate([
              'fname'=>'required',
              'lname'=>'required',
              'email'=>'required|email|unique:applicants,email',
              'password'=>'required|min:5|max:30',
              'cpassword'=>'required|min:5|max:30|same:password',
              
  
        ]);
  //Interacting with Database -> tblename = $command->varibable name
        $applicant= new Applicant();
        $applicant->fname = $request->fname;
        $applicant->lname = $request->lname;
        $applicant->email = $request->email;
        $applicant->password =Hash::make($request->password);
        $save = $applicant->save(); 
  
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
                'email'=>'required|email|exists:applicants,email',
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

        if(Auth::guard('applicant')-> attempt($creds)){
            return redirect()->route('applicant.home');

        }else{
            session()->flash('fail', 'Incorrect Credentials');
            return redirect()->route('applicant.login');
        }
           
        
    }

    public function logoutHandler(Request $request){
        Auth::guard('applicant')->logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('applicant.login');
    }
}
