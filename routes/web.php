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
    return view('frontend.pages.home');
});

Route::get('/about-us', function () {
    return view('frontend.pages.about');
});

Route::get('/service', function () {
    return view('frontend.pages.services');
});

Route::get('add','ValidationController@add');
Route::post('store','ValidationController@store');
