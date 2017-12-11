@extends('layouts.master')

@section('contenido')

	<h2><i class="fa fa-users" aria-hidden="true"></i> Actualizar proveedor</h2>	
	<p>A continuación podrás actualizar los datos del proveedor seleccionado.
	<hr/>
	<div class="col-sm-6">
		{!! Form::model($proveedor, ['class' => 'form-horizontal', 'route' => 'proveedor.update', 'method' => 'PUT']) !!}

			@include('proveedores.partials.fields')		

			<div class="form-group">
	        	<div class="col-sm-offset-2 col-sm-8">				
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-check"></i> Guardar cambios</button>	
					<a class="btn btn-danger" href="{{ route('proveedores.index') }}">
						<i class="fa fa-close"></i> Cancelar</a>			
	            </div>
        	</div>

		{!! Form:: close() !!}
	</div>

@endsection
