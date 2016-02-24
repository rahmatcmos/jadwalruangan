<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PublicController@index');
Route::get('/get-jadwal', 'PublicController@getJadwal');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/dashboard', 'HomeController@index');
    Route::get('/tambah-jadwal', 'HomeController@tambahJadwal');
   	Route::post('/tambah-jadwal', 'HomeController@prosesTambahJadwal');
   	Route::get('/edit-jadwal/{id}', 'HomeController@editJadwal');
   	Route::post('/edit-jadwal', 'HomeController@updateJadwal');
   	Route::get('/hapus-jadwal/{id}', 'HomeController@hapusJadwal');
});
