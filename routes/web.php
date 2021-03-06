<?php

Route::get('/', function () {
    return view('auth.login');
});


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

// Rutas de materias primas
Route::get('/materiasprimas', 'MateriaPrimasController@index')->name('materiasprimas.index');
Route::get('/materiaprima', 'MateriaPrimasController@create')->name('materiaprima.create');
Route::post('/materiasprimas','MateriaPrimasController@store')->name('materiaprima.store');
Route::get('/materiaprima/{id}', 'MateriaPrimasController@edit')->name('materiaprima.edit');
Route::put('/materiaprima', 'materiaPrimasController@update')->name('materiaprima.update');


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
