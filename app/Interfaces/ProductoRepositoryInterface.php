<?php

namespace App\Interfaces;

use App\Producto;

interface ProductoRepositoryInterface 
{
	public function obtenerProductos();

	public function registrarProducto(array $datos);

	public function actualizarProducto(array $datos);
	
	public function obtenerProducto($id);
}

