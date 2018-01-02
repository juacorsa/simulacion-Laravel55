<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProductoRepositoryInterface;
use App\Http\Requests\ProductoRequest;
use App\Mensaje;
use App\FlashMessage;
use Exception;

class ProductosController extends Controller
{
    private $repositorio;

	public function __construct(ProductoRepositoryInterface $repositorio)
	{		   
        $this->middleware('auth'); 
		$this->repositorio = $repositorio;        
	}

	public function index()
	{
    	$productos = $this->repositorio->obtenerProductos();
    	return view('productos.index', compact('productos'));		
	}

    public function create()
    {
        return view('productos.create');
    }

    public function store(ProductoRequest $request)
    {
        $datos = $request->only(['nombre', 'codigo']);

        try
        {
            $this->repositorio->registrarProducto($datos);            
            FlashMessage::success(Mensaje::PRODUCTO_REGISTRADO, Mensaje::ENHORABUENA);
         	return back();
        }
        catch(Exception $e)
        {        	
            FlashMessage::error(Mensaje::PRODUCTO_NO_REGISTRADO, Mensaje::ERROR);            
            return back();			
        }
    }

    public function edit($id)
	{
        $producto = $this->repositorio->obtenerProducto($id);       

        if (!$producto) 
        {
            FlashMessage::error(Mensaje::PRODUCTO_NO_ENCONTRADO, Mensaje::ERROR);                        
            return back();            
        }

        return view('productos.edit', compact('producto'));              
	}

    public function update(ProductoRequest $request)
	{
        $datos = $request->only(['nombre', 'codigo', 'id']);

        try
        {
            $this->repositorio->actualizarProducto($datos);
            FlashMessage::success(Mensaje::PRODUCTO_ACTUALIZADO, Mensaje::ENHORABUENA);            
            return back();
        }
        catch(Exception $e)
        {
            FlashMessage::error(Mensaje::PRODUCTO_NO_ACTUALIZADO, Mensaje::ERROR);            
            return back();
        }        
	}
}
