<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('index');
});
Route::get('career',function(){
    return view('career');
});
//change the next from contactus to contact, now need to use stuff in actual site
Route::get('contact',function(){
    return view('contact');
});
Route::post('contact','contactusController@store');


Route::get('gallery',function(){
    return view('gallery');
});

Route::get('login',function(){
    return view('login');
});
Route::post('login','Auth\loginController@authenticate');

Route::get('register',function(){
    return view('register');
});
Route::get('dashboard','Admin\dashboardController@index')->middleware('auth');//add
Route::get('dashboard/packages','Admin\dashboardController@packagesIndex')->middleware('auth'); 

Route::delete('dashboard/packagesDeleteAll','Admin\dashboardController@packagesDeleteAll')->middleware('auth');
Route::post('dashboard/packages','Admin\dashboardController@packagesInsert')->middleware('auth');
Route::post('dashboard/packagesUpdate','Admin\dashboardController@packagesUpdate')->middleware('auth');

Route::get('logout','Auth\loginController@logout');
Route::post('register','Auth\loginController@register');

Route::get('packages','packagesController@index');

Route::get('product','productController@index');

Route::get('services','servicesController@index');



//add a Route::fallback soon

