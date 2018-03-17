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
	return view('table');
	});
Route::get('/form', function(){ 
	return view('form');
	});
//Route::get('/barang', 'BarangController@getBarang');
//Route::get('/alamat', 'BarangController@getAlamat');
//Route::get('/nama/{huruf}', 'BarangController@getnama');
