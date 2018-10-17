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
Route::resource('pegawai','PegawaiController');
Route::resource('tpp','TppController');
Route::resource('carijabatan','CariJabatanController');
//Route::get('/pegawai/create','PegawaiController@create');
//Route::post('/pegawai','PegawaiController@store');

//sRoute::get('pegawai/create','PegawaiController@create');
//Route::post('pegawai','PegawaiController@store');
//Route::get('pegawai','PegawaiController@index');
//Route::get('/edit/pegawai/{id}','PegawaiController@edit');
//Route::post('/edit/pegawai/{id}','PegawaiController@update');
//Route::delete('/delete/pegawai/{id}','PegawaiController@destroy');