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

Route::get('/', function(){

	echo "welcome";
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/home', ['as'=>'home.index','uses'=>'HomeController@index']);
//Route::get('/admin/userList', 'StudentController@index')->name('student.index');


    Route::get('/view', ['as'=>'common.view','uses'=>'commonController@index']);
    Route::get('/viewlist', ['as'=>'common.viewlist','uses'=>'commonController@index1']);

    Route::post('/view', ['as'=>'common.filter','uses'=>'commonController@filter']);
    Route::post('/viewlist', ['as'=>'common.filterlist','uses'=>'commonController@filter1']);

    //Route::get('/student/details/{id}', 'StudentController@details')->name('student.details');

    Route::get('/image/list', ['as'=>'image.man','uses'=>'imageController@index']);

    Route::get('/image/edit/{id}', 'ImageController@edit')->name('image.edit');
    Route::post('/image/edit/{id}', 'ImageController@update')->name('image.update');

    Route::get('/image/crop/{id}', 'ImageController@crop')->name('image.crop');
    Route::post('/image/crop/{id}', 'ImageController@cropup')->name('image.cropup');

    Route::get('/image/rotate/{id}', 'ImageController@rotate')->name('image.rotate');
    Route::post('/image/rotate/{id}', 'ImageController@rotateup')->name('image.rotateup');


    //Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
    //Route::post('/student/delete/{id}', 'StudentController@destroy')->name('student.destroy');

    Route::get('/image/add', 'ImageController@add')->name('image.add');
    Route::post('/image/add', 'ImageController@upload');


