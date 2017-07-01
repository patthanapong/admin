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

Route::get('form', function (){
    return view('form');
});

Route::get('test', function (){
    return view('test');
});

Route::get('index2', function (){
    return view('index2');
});

Route::get('/pages/layout/top-nav', function (){
    return view('pages/layout/top-nav1');
});

Route::get('/pages/layout/boxed', function (){
    return view('pages/layout/boxed');
});

Route::get('/pages/layout/fixed', function (){
    return view('pages/layout/fixed');
});

Route::get('/pages/layout/collapsed-sidebar', function (){
    return view('pages/layout/collapsed-sidebar');
});

Route::get('/pages/widgets', function (){
    return view('pages/widgets');
});

Route::get('/pages/charts/chartjs', function (){
    return view('pages/charts/chartjs');
});

Route::get('/pages/charts/morris', function (){
    return view('pages/charts/morris');
});

Route::get('/pages/charts/flot', function (){
    return view('pages/charts/flot');
});

Route::get('/pages/charts/inline', function (){
    return view('pages/charts/inline');
});

Route::get('/pages/UI/general', function (){
    return view('pages/UI/general');
});

Route::get('/pages/UI/icons', function (){
    return view('pages/UI/icons');
});

Route::get('/pages/UI/buttons', function (){
    return view('pages/UI/buttons');
});

Route::get('/pages/UI/sliders', function (){
    return view('pages/UI/sliders');
});

Route::get('/pages/UI/timeline', function (){
    return view('pages/UI/timeline');
});

Route::get('/pages/UI/modals', function (){
    return view('pages/UI/modals');
});

Route::get('/pages/forms/general', function (){
    return view('pages/forms/general');
});

Route::get('/pages/forms/advanced', function (){
    return view('pages/forms/advanced');
});

Route::get('/pages/forms/editors', function (){
    return view('pages/forms/editors');
});

Route::get('/pages/tables/simple', function (){
    return view('pages/tables/simple');
});

Route::get('/pages/tables/data', function (){
    return view('pages/tables/data');
});

Route::get('/pages/calendar', function (){
    return view('pages/calendar');
});

Route::get('/pages/mail/composer', function (){
    return view('pages/mailbox/composer');
});

Route::get('/pages/mail/mailbox', function (){
    return view('pages/mailbox/mailbox');
});

Route::get('/pages/mail/real-mail', function (){
    return view('pages/mailbox/real-mail');
});

Route::get('/pages/examples/404', function (){
    return view('pages/examples/404');
});

Route::get('/pages/examples/500', function (){
    return view('pages/examples/500');
});

Route::get('/pages/examples/blank', function (){
    return view('pages/examples/blank');
});

Route::get('/pages/examples/invoice-print', function (){
    return view('pages/examples/invoice-print');
});

Route::get('/pages/examples/invoice', function (){
    return view('pages/examples/invoice');
});

Route::get('/pages/examples/lockscreen', function (){
    return view('pages/examples/lockscreen');
});

Route::get('/pages/examples/login', function (){
    return view('pages/examples/login');
});

Route::get('/pages/examples/pace', function (){
    return view('pages/examples/pace');
});

Route::get('/pages/examples/profile', function (){
    return view('pages/examples/profile');
});

Route::get('/pages/examples/register', function (){
    return view('pages/examples/register');
});

Route::get('/pages/documentation/index', function (){
    return view('pages/documentation/index');
});


Route::get('/index', 'UserController@index');
Route::get('/create', 'UserController@create');
Route::post('/create', 'UserController@store');
Route::get('/edit/{user}', 'UserController@edit');
Route::post('/edit/{user}', 'UserController@update');
Route::delete('/index/{user}', 'UserController@destroy');



    

});
Route::get('/profile', 'ProfileController@pro');
Route::post('/profile', 'ProfileController@update');








