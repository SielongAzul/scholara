<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Scholarprovider\ScholarproviderController;
use App\Models\Scholarprovider;

Route::prefix('scholarprovider')->name('scholarprovider.')->group(function(){

    Route::middleware(['guest:scholarprovider'])->group(function(){ //Calling a function to specific user
            Route::view('/login','pages.scholarprovider.auth.login')->name('login');
            Route::view('/register','pages.scholarprovider.auth.register')->name('register');
            Route::post('/create',[ScholarproviderController::class,'create'])->name('create');
            Route::post('/login_check',[ScholarproviderController::class,'loginHandler'])->name('loginHandler');

    });

    
    Route::middleware(['auth:scholarprovider' ])->group(function(){
            Route::view('/home','pages.scholarprovider.home')->name('home');
            Route::post('/logout_handler',[ScholarproviderController::class,'logoutHandler'])->name('logoutHandler');//Creating Controller to make the user log out
    });
});