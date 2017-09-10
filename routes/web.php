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
    return view('welcome_simple');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');

Route::resource('posts', 'PostController');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');


Route::get('/ajax', function(\Illuminate\Http\Request $request){
    $option = $request->option;
    switch ($option) {
        case 1:
            return view('ajax.one');
            break;
        case 2:
            return view('ajax.two');
            break;
        case 3:
            return view('ajax.three');
            break;
        default:
            return 'No view found';
            break;
    }
})->name('get-ajax');

Route::get('/example', function(){
    return view('ajax.ajax');
})->name('example');
