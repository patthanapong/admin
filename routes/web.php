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
Route::get('login','AuthController@getlogin')->name('login');
Route::get('register', 'AuthController@register');
Route::post('addregister', 'AuthController@store');
Route::post('login','AuthController@postlogin');
Route::get('logout','AuthController@logout');

Route::group(['middleware'=>['auth']],function ()  {
Route::get('/', function () {
    return view('index');
});





Route::get('/admin', function (){
    return view('index');
});

Route::get('/user/index', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');
Route::get('/user/edit/{user}', 'UserController@edit');
Route::post('/user/edit/{user}', 'UserController@update');
Route::delete('/user/index/{user}', 'UserController@destroy');

Route::resource('/dolladeposit', 'DepositController');
Route::resource('/dollawithdraw', 'WithDrawController');

Route::get('/activity/index', 'ActivityLogController@index');



    

});

Route::get('/profile', 'ProfileController@pro');
Route::post('/profile', 'ProfileController@update');








