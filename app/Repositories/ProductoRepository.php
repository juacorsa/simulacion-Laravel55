<?php

namespace App\Repositories;

use App\Producto;
use App\Interfaces\ProductoRepositoryInterface;

class ProductoRepository implements ProductoRepositoryInterface
{
	public function obtenerProductos()
	{
		return Producto::orderBy('nombre','asc')->get();
	}

	public function registrarProducto(array $datos)
	{
		$producto = new Producto();
		$producto->nombre = $datos['nombre'];
		$producto->codigo = $datos['codigo'];
		$producto->save();
	}

	public function actualizarProducto(array $datos)
	{
		$id = $datos['id'];
		$producto = $this->obtenerProducto($id);
		$producto->nombre = $datos['nombre'];
		$producto->codigo = $datos['codigo'];
		$producto->save();
	}
	
	public function obtenerProducto($id)
	{
		return Producto::find($id);
	}
}

