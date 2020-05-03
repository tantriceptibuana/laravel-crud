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

Route::get('/Profile', function () {
    return view('Profile');
});



route::get('inputdata','DataController@created');
route::post('savecreate','DataController@savecreate');
route::get('daftarmahasiswa','DataController@read');
route::get('editdata/{id}','DataController@update');
route::post('update','DataController@saveupdate');
route::get('hapus/{id}','DataController@delete');