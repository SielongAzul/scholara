<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin',])->group(function(){ //Calling a function to specific user
        Route::view('/login','pages.admin.auth.login')->name('login');  //Guest View if not login
        Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler'); //Handles the login
    
    });

    
    Route::middleware(['auth:admin',])->group(function(){
        Route::view('/home','back.pages.admin.home')->name('home');  // Admin view if logiged itn
        Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logout_handler');//Creating Controller to make the user log out
    });
    
});