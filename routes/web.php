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

<<<<<<< HEAD
Route::get('/', 'IndexController@index');
Route::get('/create', 'CreateController@index');
Route::get('/game/delete/{id}', 'GameController@deleteOne');
Route::post('/game/insert', 'GameController@insertOne');

Route::post('/game/update', 'GameController@updateOneAction');
Route::get('/game/update/{id}', 'GameController@updateOne');

=======
Route::get('/', 'BaseController@index');
Route::get('/create', 'CreateController@index');

Route::post('/cat/insert', 'CatController@insertOne');
Route::post('/cat/update', 'CatController@updateOneAction');

Route::get('/cat/delete/{id}', 'CatController@deleteOne');
Route::get('/cat/update/{id}', 'CatController@updateOne');
>>>>>>> de2d4612dda96391e04a5df73e24a39f1bcaa991
