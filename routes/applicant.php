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
    });
});