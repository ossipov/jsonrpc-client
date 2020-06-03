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

Route::get('/', "PagesController@index");
Route::get('/edit/{page_uid}', "PagesController@edit");
Route::get('/view/{page_uid}', "PagesController@view");
Route::post('/upd/{page_uid}', "PagesController@update");
