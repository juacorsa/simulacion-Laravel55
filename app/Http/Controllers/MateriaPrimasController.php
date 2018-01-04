<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MateriaPrimaRepositoryInterface;
use App\Interfaces\ProveedorRepositoryInterface;
use App\Http\Requests\MateriaPrimaRequest;
use App\Mensaje;
use App\FlashMessage;
use Exception;
use Illuminate\Support\Facades\Auth;

class MateriaPrimasController extends Controller
{
 	private $repoMateriasPrimas;
 	private $repoProveedores;

	public function __construct(MateriaPrimaRepositoryInterface $repoMateriasPrimas, ProveedorRepositoryInterface $repoProveedores)
	{	
        $this->middleware('auth'); 	    
		$this->repoMateriasPrimas = $repoMateriasPrimas;        
		$this->repoProveedores    = $repoProveedores;
	}    

	public function index()
	{
    	$materiasPrimas = $this->repoMateriasPrimas->obtenerMateriasPrimas();
    	return view('materiasprimas.index', compact('materiasPrimas'));		
	}

	public function create()
	{		
        if (Auth::user()->isAdmin()) 
        {
		  $proveedores = $this->repoProveedores->obtenerProveedoresPluck();
		  return view('materiasprimas.create', compact('proveedores'));
        }
        else             
            return view('auth.deny');
	}

	public function store(MateriaPrimaRequest $request)
	{
        if (Auth::user()->isAdmin()) 
        {
    		$datos = $request->only(['nombre', 'stock', 'stock_minimo', 'precio', 'reanalisis', 
    			'lote', 'accion', 'proveedor_id']);

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
        else
            return view('auth.deny');
	}

	public function edit($id)
	{
        if (Auth::user()->isAdmin()) 
        {
            $materiaPrima = $this->repoMateriasPrimas->obtenerMateriaPrima($id);       

            if (!$materiaPrima) 
            {
                FlashMessage::error(Mensaje::MATERIA_PRIMA_NO_ENCONTRADA, Mensaje::ERROR);                        
                return back();            
            }
            
    		$proveedores = $this->repoProveedores->obtenerProveedoresPluck();        
            return view('materiasprimas.edit', compact('materiaPrima', 'proveedores'));              		
        }
        else
            return view('auth.deny');
	}

	public function update(MateriaPrimaRequest $request)
	{
        if (Auth::user()->isAdmin()) 
        {        
        	$datos = $request->only(['nombre', 'stock', 'stock_minimo', 'precio', 'reanalisis', 
    			'lote', 'accion', 'proveedor_id', 'id']);

            try
            {
                $this->repoMateriasPrimas->actualizarMateriaPrima($datos);
                FlashMessage::success(Mensaje::MATERIA_PRIMA_ACTUALIZADA, Mensaje::ENHORABUENA);            
                return back();
            }
            catch(Exception $e)
            {
                FlashMessage::error(Mensaje::MATERIA_PRIMA_NO_ACTUALIZADA, Mensaje::ERROR);            
                return back();
            }        		
        }
        else
            return view('auth.deny');
	}
}
