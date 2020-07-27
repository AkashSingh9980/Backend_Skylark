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

Route::get('logout','Auth\loginController@logout');
Route::post('register','Auth\loginController@register');

Route::get('packages','packagesController@index');

Route::get('product','productController@index');

Route::get('services','servicesController@index');

Route::get('signin',function(){
    return view('sigin');
});
Route::get('signup',function(){
    return view('sigup');
});
Route::get('single',function(){
    return view('single');
});
Route::get('thankyou',function(){
    return view('thankyou');
});

