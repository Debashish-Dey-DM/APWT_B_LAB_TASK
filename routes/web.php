<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', ['as'=>'login.index', 'uses'=>'LoginController@index']);
Route::post('/login', 'LoginController@verify');
Route::get('/home', 'Homecontroller@index');
Route::get('/logout', 'LogoutController@index');
Route::get('/Reg', 'UserController@index');
Route::post('/Reg','UserController@verify');