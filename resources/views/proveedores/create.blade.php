@extends('layouts.master')

@section('contenido')
	<h2><i class="fa fa-users" aria-hidden="true"></i> Registrar proveedor</h2>
	<p>
	    A continuación podrás registrar un nuevo proveedor. Tanto el código como el nombre son
	    datos requeridos.
	</p>
	<hr/>
	<div class="col-sm-6">
		{!! Form::open(['class' => 'form-horizontal', 'route' => 'proveedor.store', 'method' => 'POST']) !!}

			@include('proveedores.partials.fields')		

			<div class="form-group">
	        	<div class="col-sm-offset-2 col-sm-8">				
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-plus"></i> Registrar proveedor</button>				
	            </div>
        	</div>

		{!! Form:: close() !!}
	</div>
@endsection
