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

Auth::routes();


Route::middleware(['auth'])->group(function (){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('principal.users','UserController@index')->name('principal.users.index')
    ->middleware('permission:principal.users.index');

    Route::get('principal.users/{user}','UserController@show')->name('principal.users.show')
    ->middleware('permission:principal.users.show');
    
    // crear usuarios
    Route::get('principal.users.create','UserController@create')->name('principal.users.create')
    ->middleware('permission:principal.users.create');
    Route::post('principal.users.store','UserController@store')->name('principal.users.store')
    ->middleware('permission:principal.users.store');
    
    // editar usuarios
    Route::put('principal.users/{user}','UserController@update')->name('principal.users.update')
    ->middleware('permission:principal.users.update');
    Route::get('principal.users/{user}/edit','UserController@edit')->name('principal.users.edit')
    ->middleware('permission:principal.users.edit');
    
    // eliminar usuarios
    Route::delete('principal.users/{user}','UserController@destroy')->name('principal.users.destroy')
    ->middleware('permission:principal.users.destroy');

});


