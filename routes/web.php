<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Rutas de proveedores
Route::get('/proveedores', 'ProveedoresController@index')->name('proveedores.index');
Route::get('/proveedor', 'ProveedoresController@create')->name('proveedor.create');
Route::post('/proveedor', 'ProveedoresController@store')->name('proveedor.store');
Route::get('/proveedor/{id}', 'ProveedoresController@edit')->name('proveedor.edit');
Route::put('/proveedor', 'ProveedoresController@update')->name('proveedor.update');

