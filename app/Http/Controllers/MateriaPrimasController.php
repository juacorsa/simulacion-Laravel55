<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MateriaPrimaRepositoryInterface;
use App\Interfaces\ProveedorRepositoryInterface;
use App\Http\Requests\MateriaPrimaRequest;
use App\Mensaje;
use App\FlashMessage;
use Exception;

class MateriaPrimasController extends Controller
{
 	private $repoMateriasPrimas;
 	private $repoProveedores;

	public function __construct(MateriaPrimaRepositoryInterface $repositorio, ProveedorRepositoryInterface $repositorioProveedores)
	{		    
		$this->repoMateriasPrimas = $repositorio;        
		$this->repoProveedores    = $repositorioProveedores;
	}    

	public function index()
	{
    	$materiasPrimas = $this->repoMateriasPrimas->obtenerMateriasPrimas();
    	return view('materiasprimas.index', compact('materiasPrimas'));		
	}

	public function create()
	{
		$proveedores = $this->repoProveedores->obtenerProveedores();
		return view('materiasprimas.create', compact('proveedores'));
	}

	public function store(MateriaPrimaRequest $request)
	{
		$datos = $request->only(['nombre', 'stock', 'stock_minimo', 'precio', 'reanalisis', 
			'lote', 'accion', 'proveedor_id']);

		$datos['stock'] = $datos['stock'] * 100;
		$datos['stock_minimo'] = $datos['stock_minimo'] * 100;

        try
        {
            $this->repoMateriasPrimas->registrarMateriaPrima($datos);            
            FlashMessage::success(Mensaje::MATERIA_PRIMA_REGISTRADA, Mensaje::ENHORABUENA);
         	return back();
        }
        catch(Exception $e)
        {    	
          	FlashMessage::error(Mensaje::MATERIA_PRIMA_NO_REGISTRADA, Mensaje::ERROR);            
            return back();			
        }		
	}

	public function edit($id)
	{
		
	}

	public function update(MateriaPrimaRequest $request)
	{
		
	}



}
