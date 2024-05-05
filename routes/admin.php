<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin',])->group(function(){ //Calling a function to specific user
        Route::view('/login','pages.admin.auth.login')->name('login');  //Guest View if not login
        Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler'); //Handles the login
    
    });

    
    Route::middleware(['auth:admin',])->group(function(){
        Route::view('/home','pages.admin.home')->name('home');  // Admin view if logiged itn
        Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logoutHandler');//Creating Controller to make the user log out
        Route::view('/category_table','pages.admin.category-table')->name('category_table');  //Guest View if not login
        Route::view('/show_scholarships','pages.admin.scholarships')->name('show_scholarships');  //Guest View if not login
        Route::view('/add_validator','pages.admin.add-validator')->name('add_validator');  //Guest View if not login
        Route::view('/show_applicants','pages.admin.registered-applicants')->name('show_applicants');  //Guest View if not login
        Route::view('/show_providers','pages.admin.registered-providers')->name('show_providers');  //Guest View if not login
        Route::view('/show_validators','pages.admin.registered-validator')->name('show_validators');  //Guest View if not login
        Route::view('/add_scholarship_category','pages.admin.add-scholarship-category')->name('add_scholarship_category');  //Guest View if not login

        //Route::view('url_name','view_location')->name('view handler name');
    });
    
});