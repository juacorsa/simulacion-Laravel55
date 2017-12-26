<?php

namespace App\Interfaces;

use App\Proveedor;

interface ProveedorRepositoryInterface 
{
	public function obtenerProveedores();

	public function obtenerProveedoresPluck();

	public function registrarProveedor(array $datos);

	public function actualizarProveedor(array $datos);
	
	public function obtenerProveedor($id);
}



