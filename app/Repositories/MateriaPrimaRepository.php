<?php

namespace App\Repositories;

use App\MateriaPrima;
use App\Interfaces\MateriaPrimaRepositoryInterface;

class MateriaPrimaRepository implements MateriaPrimaRepositoryInterface
{
	public function obtenerMateriasPrimas()
	{
		return MateriaPrima::with('proveedor')
			->orderBy('nombre','asc')->get();
	}

	public function registrarMateriaPrima(array $datos)
	{
		$materiaPrima = new MateriaPrima();
		$materiaPrima->nombre = $datos['nombre'];
		$materiaPrima->stock  = $datos['stock'];
		$materiaPrima->stock_minimo = $datos['stock_minimo'];
		$materiaPrima->precio       = $datos['precio'];
		$materiaPrima->lote         = $datos['lote'];
		$materiaPrima->reanalisis   = $datos['reanalisis'];
		$materiaPrima->accion 	    = $datos['accion'];
		$materiaPrima->proveedor_id = $datos['proveedor_id'];		
		$materiaPrima->save();
	}

	public function actualizarMateriaPrima(array $datos)
	{
		$id = $datos['id'];
		$materiaPrima = $this->obtenerMateriaPrima($id);
		$materiaPrima->nombre = $datos['nombre'];
		$materiaPrima->stock  = $datos['stock'];
		$materiaPrima->stock_minimo = $datos['stock_minimo'];
		$materiaPrima->precio       = $datos['precio'];
		$materiaPrima->lote         = $datos['lote'];
		$materiaPrima->reanalisis   = $datos['reanalisis'];
		$materiaPrima->accion 	    = $datos['accion'];
		$materiaPrima->proveedor_id = $datos['proveedor_id'];				
		$materiaPrima->save();
	}
	
	public function obtenerMateriaPrima($id)
	{
		return MateriaPrima::find($id);
	}
}

