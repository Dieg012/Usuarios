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
Route::get('/', function(){
    return view('welcome');
});

//USERS
Route::get('/signIn', 'registerController@signIn');
Route::get('/logIn', 'registerController@logIn');
Route::post('/create/user', 'UserController@createUser')->name('createUser');
Route::post('/mainPage', 'UserController@mainPage');
//Route::get('/mainPage', 'UserController@mainPage');

//TASKS
Route::get('/task/creator/{id}', 'TaskController@index');
Route::post('/create/task', 'TaskController@createTask');