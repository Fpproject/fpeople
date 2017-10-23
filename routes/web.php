<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fashion', function () {
    return view('fashion');
});

Route::get('/beauty', function(){
   return view('beauty');
});
Route::get('/lifestyle', function () {
    return view('lifestyle');
});

Route::get('/snatch', function(){
    return view('snatch');
});

Route::get('/potrait', function () {
    return view('potrait');
});

Route::get('/about', function () {
    return view('about');
});

