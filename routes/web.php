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

Route::get('/ppn', function(){
    return 'ppn';
});

Route::get('getUserDetail', 'User\\UserController@getUserDetail');
Route::get('getTableName', 'User\\UserController@getTableName');
Route::post('updateUserInfo', 'User\\UserController@updateUserInfo');
