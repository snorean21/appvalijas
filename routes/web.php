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

Route::group(['middleware' => 'auth'], function(){
	Route::get('home', 'PortalController@home')->name('home');

	// RUTAS PARA LA ENTRA DE VALIJA
	Route::get('entrada_registros','PortalController@entrada_index')->name('index');

	// RUTAS PARA LA SALIDA DE VALIJA
	Route::get('salida_registros','PortalController@salida_index')->name('index');
	Route::get('nuevo_registro','PortalController@salida_create')->name('create');
	Route::post('store','PortalController@salida_store')->name('store');
	Route::get('ver_registro/{id}','PortalController@salida_show')->name('ver.show');
	Route::get('editar_registro/{id}','PortalController@salida_edit')->name('modify.edit');
	Route::put('edit/{id}','PortalController@salida_update')->name('edit.update');
	Route::delete('destroy/{id}','PortalController@salida_destroy')->name('destroy');

	// RUTAS PARA LAS DESCRIPCIONES DE LAS VALIJAS
	Route::get('salida_registros','PortalController@salida_index')->name('index');
});

