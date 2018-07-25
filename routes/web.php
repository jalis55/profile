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

Route::post('/upload-pp','HomeController@upload_pp');
Route::get('/skills','HomeController@skill');
Route::get('/work-exp','HomeController@work_exprience');
Route::get('/education','HomeController@education');
//skills
Route::get('/view-skill','SkillController@view_skill');
Route::post('/add-skill','SkillController@add_skill');
Route::get('/delete-skill/{id}','SkillController@delete_skill');
Route::post('/update-skill','SkillController@update_skill');