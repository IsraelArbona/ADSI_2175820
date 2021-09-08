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


    // Usuarios
    Route::get('principal.users','UserController@index')->name('principal.users.index')
    ->middleware('permission:principal.users.index');
    Route::get('principal.users/{user}','UserController@show')->name('principal.users.show')
    ->middleware('permission:principal.users.show');
    // crear usuarios
    Route::get('principal.users.create','UserController@create')->name('principal.users.create')
    ->middleware('permission:principal.users.create');
    Route::post('principal.users.store','UserController@store')->name('principal.users.store')
    ->middleware('permission:principal.users.create');
    // editar usuarios
    Route::put('principal.users/{user}','UserController@update')->name('principal.users.update')
    ->middleware('permission:principal.users.edit');
    Route::get('principal.users/{user}/edit','UserController@edit')->name('principal.users.edit')
    ->middleware('permission:principal.users.edit');
    // eliminar usuarios
    Route::delete('principal.users/{user}','UserController@destroy')->name('principal.users.destroy')
    ->middleware('permission:principal.users.destroy');
    // exportar excel
    Route::get('Usuarios-Lista.xlsx','UserController@exportarExcel')->name('principal.users.exportarExcel')
    ->middleware('permission:principal.users.index');


    // Roles y Permisos
    Route::get('principal.roles','RoleController@index')->name('principal.roles.index')
    ->middleware('permission:principal.roles.index');
    Route::get('principal.roles/{role}','RoleController@show')->name('principal.roles.show')
    ->middleware('permission:principal.roles.show');
    // crear
    Route::get('principal.roles.create','RoleController@create')->name('principal.roles.create')
    ->middleware('permission:principal.roles.create');
    Route::post('principal.roles.store','RoleController@store')->name('principal.roles.store')
    ->middleware('permission:principal.roles.create');
    // editar
    Route::put('principal.roles/{role}','RoleController@update')->name('principal.roles.update')
    ->middleware('permission:principal.roles.edit');
    Route::get('principal.roles/{role}/edit','RoleController@edit')->name('principal.roles.edit')
    ->middleware('permission:principal.roles.edit');
    // eliminar 
    Route::delete('principal.roles/{role}','RoleController@destroy')->name('principal.roles.destroy')
    ->middleware('permission:principal.roles.destroy');

});


