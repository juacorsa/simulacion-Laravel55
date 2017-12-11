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

// Rutas de productos
Route::get('/productos', 'ProductosController@index')->name('productos.index');
Route::get('/producto', 'ProductosController@create')->name('producto.create');
Route::post('/productos','ProductosController@store')->name('producto.store');
Route::get('/producto/{id}', 'ProductosController@edit')->name('producto.edit');
Route::put('/producto', 'ProductosController@update')->name('producto.update');
