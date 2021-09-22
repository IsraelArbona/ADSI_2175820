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


    // Paises
    Route::get('principal.paises','PaisController@index')->name('principal.paises.index')
    ->middleware('permission:principal.paises.index');
    Route::get('principal.paises/{pais}','PaisController@show')->name('principal.paises.show')
    ->middleware('permission:principal.paises.show');
    // crear
    Route::get('principal.paises.create','PaisController@create')->name('principal.paises.create')
    ->middleware('permission:principal.paises.create');
    Route::post('principal.paises.store','PaisController@store')->name('principal.paises.store')
    ->middleware('permission:principal.paises.create');
    // editar
    Route::put('principal.paises/{pais}','PaisController@update')->name('principal.paises.update')
    ->middleware('permission:principal.paises.edit');
    Route::get('principal.paises/{pais}/edit','PaisController@edit')->name('principal.paises.edit')
    ->middleware('permission:principal.paises.edit');
    // eliminar 
    Route::delete('principal.paises/{pais}','PaisController@destroy')->name('principal.paises.destroy')
    ->middleware('permission:principal.paises.destroy');

    // Dptos
    Route::get('principal.dptos','DptoController@index')->name('principal.dptos.index')
    ->middleware('permission:principal.dptos.index');
    Route::get('principal.dptos/{dpto}','DptoController@show')->name('principal.dptos.show')
    ->middleware('permission:principal.dptos.show');
    // crear
    Route::get('principal.dptos.create','DptoController@create')->name('principal.dptos.create')
    ->middleware('permission:principal.dptos.create');
    Route::post('principal.dptos.store','DptoController@store')->name('principal.dptos.store')
    ->middleware('permission:principal.dptos.create');
    // editar
    Route::put('principal.dptos/{dpto}','DptoController@update')->name('principal.dptos.update')
    ->middleware('permission:principal.dptos.edit');
    Route::get('principal.dptos/{dpto}/edit','DptoController@edit')->name('principal.dptos.edit')
    ->middleware('permission:principal.dptos.edit');
    // eliminar 
    Route::delete('principal.dptos/{dpto}','DptoController@destroy')->name('principal.dptos.destroy')
    ->middleware('permission:principal.dptos.destroy');

});


