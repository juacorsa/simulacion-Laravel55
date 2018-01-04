<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $this->middleware('auth'); 
		$this->repositorio = $repositorio;        
	}

    public function index()
    {
    	$proveedores = $this->repositorio->obtenerProveedores();
    	return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        if (Auth::user()->isAdmin()) 
            return view('proveedores.create');
        else
            return view('auth.deny');
    }

    public function store(ProveedorRequest $request)
    {
        if (Auth::user()->isAdmin())         
        {
            $datos = $request->only(['nombre', 'codigo', 'direccion', 'poblacion', 'fax', 'telefono', 
                'email', 'contacto']); 

            try
            {
                $this->repositorio->registrarProveedor($datos);            
                FlashMessage::success(Mensaje::PROVEEDOR_REGISTRADO, Mensaje::ENHORABUENA);
                return back();
            }
            catch(Exception $e)
            {
                FlashMessage::error(Mensaje::PROVEEDOR_NO_REGISTRADO, Mensaje::ERROR);
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
            $proveedor = $this->repositorio->obtenerProveedor($id);       

            if (!$proveedor) 
            {
                FlashMessage::error(Mensaje::PROVEEDOR_NO_ENCONTRADO, Mensaje::ERROR);                        
                return back();            
            }

            return view('proveedores.edit', compact('proveedor'));      
        }
        else
            return view('auth.deny');
    }

    public function update(ProveedorRequest $request)
    {
        if (Auth::user()->isAdmin()) 
        {        
            $datos = $request->only(['nombre', 'direccion', 'poblacion', 'fax', 'telefono', 
                'email', 'contacto', 'id', 'codigo']); 

            try
            {
                $this->repositorio->actualizarProveedor($datos);
                FlashMessage::success(Mensaje::PROVEEDOR_ACTUALIZADO, Mensaje::ENHORABUENA);
                return back();
            }
            catch(Exception $e)
            {
                FlashMessage::error(Mensaje::PROVEEDOR_NO_ACTUALIZADO, Mensaje::ERROR);            
                return back();
            }
        }
        else
            return view('auth.deny');
    }    
}
