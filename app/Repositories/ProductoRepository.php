<?php

namespace App\Repositories;

use App\Producto;
use App\Interfaces\ProductoRepositoryInterface;

class ProductoRepository implements ProductoRepositoryInterface
{
	public function obtenerTodos()
	{
		return Producto::orderBy('nombre','asc')->get();
	}

	public function registrar(array $datos)
	{
		$producto = new Producto();
		$producto->nombre = $datos['nombre'];
		$producto->codigo = $datos['codigo'];
		$producto->save();
	}

	public function actualizar(array $datos)
	{
		$id = $datos['id'];
		$producto = $this->obtener($id);
		$producto->nombre = $datos['nombre'];
		$producto->codigo = $datos['codigo'];
		$producto->save();
	}
	
	public function obtener($id)
	{
		return Producto::find($id);
	}
}

