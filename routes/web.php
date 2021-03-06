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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/test/{nama}/dan/{lname}','C_register@sapa');

Route::get('/form','C_register@form');

Route::post('/sapa','C_register@sapa');
	//view('test',["angka"=>$angka]);
	/*$nama=$nama;
	$lname=$lname;
     return  "$nama $lname";*/
  Route::get('/post/create','PertanyaanController@create');   





/*Tugasssssssssss pertama*/
Route::get('/depan', 'HomeController@depan');
Route::get('/register','AuthController@register');
Route::post('/welcome','AuthController@welcome');

/*Tugasssssssssss kedua laravel*/
Route::get('/',function(){
	return view('items.table1');
});
Route::get('/data-tables',function(){
	return view('items.table2');
});

Route::get('/master', function(){
	return view('adminlte.master');
});
Route::get('/items', function(){
	return view('items.index');
});

Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/{id}','PertanyaanController@show');
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{id}','PertanyaanController@update');