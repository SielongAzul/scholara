<?php

use App\Http\Controllers\Validator\ValidatorController;
use Illuminate\Support\Facades\Route;



Route::prefix('validator')->name('validator.')->group(function(){

    Route::middleware(['guest:validator',])->group(function(){ //Calling a function to specific user
        Route::view('/login','pages.validator.auth.login')->name('login');  //Guest View if not login
        Route::post('/login_handler',[ValidatorController::class,'loginHandler'])->name('loginHandler'); //Handles the login
    
    });

    
    Route::middleware(['auth:validator',])->group(function(){
        Route::view('/home','pages.validator.home')->name('home');  // Admin view if logiged itn
        Route::post('/logout_handler',[ValidatorController::class,'logoutHandler'])->name('logoutHandler');//Creating Controller to make the user log out
    });
    
});