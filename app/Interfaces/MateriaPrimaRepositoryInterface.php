<?php

namespace App\Interfaces;

use App\MateriaPrima;

interface MateriaPrimaRepositoryInterface 
{
	public function obtenerMateriasPrimas();

	public function registrarMateriaPrima(array $datos);

	public function actualizarMateriaPrima(array $datos);
	
	public function obtenerMateriaPrima($id);
}

