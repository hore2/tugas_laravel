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
Route::get('/test', function () {
     return view('test');
});

Route::get('/form','C_register@form');
Route::post('/sapa','C_register@sapa');

/*Tugasssssssssss*/
/*Route::get('/home', function () {
     return view('test');

Route::post('/home','HomeController@home');*/
Route::get('/', function () {
    return view('home');
});
Route::get('/register','AuthController@register');
Route::post('/welcome','AuthController@welcome');
