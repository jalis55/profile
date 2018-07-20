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
Route::get('/','ProfileController@index');
Auth::routes();
// Route::match(['get', 'post'], 'register', function(){
//     abort(404);
// });

Route::get('/home', 'HomeController@index')->name('admin');
Route::get('/change-pp','HomeController@change_pp')->name('upload image');
