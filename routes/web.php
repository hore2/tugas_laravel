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
     





/*Tugasssssssssss pertama*/
/*Route::get('/', 'HomeController@home');
Route::get('/register','AuthController@register');
Route::post('/welcome','AuthController@welcome');*/

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

Route::get('/items/create', function(){
	return view('items.create');
});