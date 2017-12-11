<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ProveedorRepositoryInterface;
use App\Http\Requests\ProveedorRequest;
use App\Mensaje;
use App\FlashMessage;
use Exception;

class ProveedoresController extends Controller
{
	private $repositorio;
    
	public function __construct(ProveedorRepositoryInterface $repositorio)
	{		    
		$this->repositorio = $repositorio;        
	}

    public function index()
    {
    	$proveedores = $this->repositorio->obtenerTodos();        
    	return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(ProveedorRequest $request)
    {
        $datos = $request->only(['nombre', 'codigo', 'direccion', 'poblacion', 'fax', 'telefono', 
            'email', 'contacto']); 

        try
        {
            $this->repositorio->registrar($datos);            
            FlashMessage::success(Mensaje::PROVEEDOR_REGISTRADO, Mensaje::ENHORABUENA);
            return redirect()->route('proveedores.index');
        }
        catch(Exception $e)
        {
            FlashMessage::error(Mensaje::PROVEEDOR_NO_REGISTRADO, Mensaje::ERROR);
            return back();
        }
    }

    public function edit($id)
    {
        $proveedor = $this->repositorio->obtener($id);       

        if (!$proveedor) 
        {
            FlashMessage::error(Mensaje::PROVEEDOR_NO_ENCONTRADO, Mensaje::ERROR);                        
            return back();            
        }

        return view('proveedores.edit', compact('proveedor'));      
    }

    public function update(ProveedorRequest $request)
    {
        $datos = $request->only(['nombre', 'direccion', 'poblacion', 'fax', 'telefono', 
            'email', 'contacto', 'id', 'codigo']); 

        try
        {
            $this->repositorio->actualizar($datos);
            FlashMessage::success(Mensaje::PROVEEDOR_ACTUALIZADO, Mensaje::ENHORABUENA);
            return redirect()->route('proveedores.index');
        }
        catch(Exception $e)
        {
            FlashMessage::error(Mensaje::PROVEEDOR_NO_ACTUALIZADO, Mensaje::ERROR);            
            return back();
        }
    }    
}
