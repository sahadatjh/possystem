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

Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('user')->group(function(){
    Route::get('/list', 'Backend\UserController@index')->name('user.list');
    Route::get('/profile/{id}', 'Backend\UserController@view')->name('user.view');
    Route::get('/add', 'Backend\UserController@add')->name('user.add');
    Route::post('/store', 'Backend\UserController@store')->name('user.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('user.edit');
    Route::post('/update', 'Backend\UserController@update')->name('user.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('user.delete');
});
