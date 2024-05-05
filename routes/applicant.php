<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Applicant\ApplicantController;

Route::prefix('applicant')->name('applicant.')->group(function(){

    Route::middleware(['guest:applicant'])->group(function(){ //Calling a function to specific user
            Route::view('/login','pages.applicant.auth.login')->name('login');
            Route::view('/register','pages.applicant.auth.register')->name('register');
            Route::post('/create',[ApplicantController::class,'create'])->name('create');
            Route::post('/login_check',[ApplicantController::class,'loginHandler'])->name('loginHandler');

    });

    
    Route::middleware(['auth:applicant' ])->group(function(){
            Route::view('/home','pages.applicant.home')->name('home');
            Route::post('/logout_handler',[ApplicantController::class,'logoutHandler'])->name('logoutHandler');//Creating Controller to make the user log out
            Route::view('/show_application','pages.applicant.applied-scholarships')->name('show_application');  //Guest View if not login
            Route::view('/applicant_profile','pages.applicant.applicant-profile')->name('applicant_profile');  //Guest View if not login
            Route::view('/applicant_edit','pages.applicant.applicant-edit')->name('applicant_edit');  //Guest View if not login
            Route::view('/applicant_account_edit','pages.applicant.applicant-account-edit')->name('applicant_account_edit');  //Guest View if not login
            Route::view('/submission_edit','pages.applicant.edit-submission-view')->name('submission_edit');  //Guest View if not login
            Route::view('/update_enrollment','pages.applicant.update-enrollment')->name('update_enrollment');  //Guest View if not login
    });
});