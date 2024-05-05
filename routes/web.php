<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::view('/providers','provider-index')->name('providers');
Route::view('/listings','scholarship-listing')->name('listings');
Route::view('/detail','scholarship-detail')->name('detail');




Route::view('/sample-layout', 'sample-layout');
