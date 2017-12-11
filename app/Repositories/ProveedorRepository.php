<?php

namespace App\Repositories;

use App\Proveedor;
use App\Interfaces\ProveedorRepositoryInterface;

class ProveedorRepository implements ProveedorRepositoryInterface
{
	public function obtenerTodos()
	{
		return Proveedor::orderBy('nombre','asc')->get();
	}

	public function registrar(array $datos)
	{
		$proveedor = new Proveedor();
		$proveedor->nombre = $datos['nombre'];
		$proveedor->codigo = $datos['codigo'];
		$proveedor->direccion = $datos['direccion'];
		$proveedor->poblacion = $datos['poblacion'];
		$proveedor->telefono  = $datos['telefono'];
		$proveedor->fax 	  = $datos['fax'];
		$proveedor->email     = $datos['email'];
		$proveedor->contacto  = $datos['contacto'];
		$proveedor->save();
	}

	public function actualizar(array $datos)
	{
		$id = $datos['id'];
		$proveedor = $this->obtener($id);
		$proveedor->nombre = $datos['nombre'];
		$proveedor->codigo = $datos['codigo'];
		$proveedor->direccion = $datos['direccion'];
		$proveedor->poblacion = $datos['poblacion'];
		$proveedor->telefono  = $datos['telefono'];
		$proveedor->fax 	  = $datos['fax'];
		$proveedor->email     = $datos['email'];
		$proveedor->contacto  = $datos['contacto'];
		$proveedor->save();		
	}
	
	public function obtener($id)
	{
		return Proveedor::find($id);
	}
}

