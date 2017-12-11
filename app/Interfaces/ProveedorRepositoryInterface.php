<?php

namespace App\Interfaces;

use App\Proveedor;

interface ProveedorRepositoryInterface 
{
	public function obtenerTodos();

	public function registrar(array $datos);

	public function actualizar(array $datos);
	
	public function obtener($id);
}

