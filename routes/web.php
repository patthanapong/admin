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
Route::get('index2', function (){
    return view('index2');
});

Route::get('/index', 'UserController@index');
Route::get('/create', 'UserController@create');
Route::post('/create', 'UserController@store');
Route::get('/edit/{user}', 'UserController@edit');
Route::post('/edit/{user}', 'UserController@update');
Route::delete('/index/{user}', 'UserController@destroy');

Route::resource('/dolladeposit', 'DepositController');
Route::resource('/dollawithdraw', 'WithDrawController');



    

});

Route::get('/profile', 'ProfileController@pro');
Route::post('/profile', 'ProfileController@update');








