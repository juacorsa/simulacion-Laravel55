<?php

namespace App\Repositories;

use App\Proveedor;
use App\Interfaces\ProveedorRepositoryInterface;

class ProveedorRepository implements ProveedorRepositoryInterface
{
	public function obtenerProveedores()
	{
		return Proveedor::orderBy('nombre','asc')->get();
	}

	public function obtenerProveedoresPluck()
	{
		return Proveedor::pluck('nombre', 'id');   
	}

	public function registrarProveedor(array $datos)
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

	public function actualizarProveedor(array $datos)
	{
		$id = $datos['id'];
		$proveedor = $this->obtenerProveedor($id);
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
	
	public function obtenerProveedor($id)
	{
		return Proveedor::find($id);
	}
}

