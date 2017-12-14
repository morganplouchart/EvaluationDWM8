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

Route::get('/', 'IndexController@index');
Route::get('/create', 'CreateController@index');
Route::get('/game/delete/{id}', 'GameController@deleteOne');
Route::post('/game/insert', 'GameController@insertOne');

Route::post('/game/update', 'GameController@updateOneAction');
Route::get('/game/update/{id}', 'GameController@updateOne');

