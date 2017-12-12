@extends('layouts.master')

@section('contenido')

	<h2><i class="fa fa-users" aria-hidden="true"></i> Actualizar proveedor</h2>	
	<p>A continuación podrás actualizar los datos del proveedor seleccionado.
	<hr/>
	<div class="col-sm-6">
		{!! Form::model($proveedor, ['class' => 'form-horizontal', 'route' => 'proveedor.update', 'method' => 'PUT']) !!}

			@include('proveedores.partials.fields')		

			<div class="form-group">
	        	<div class="col-sm-offset-2 col-sm-10">				
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-check"></i> Guardar cambios</button>	
					<a class="btn btn-danger" href="{{ route('proveedores.index') }}">
						<i class="fa fa-check"></i> Volver al listado de proveedores</a>			
	            </div>
        	</div>

		{!! Form:: close() !!}
	</div>

	@section('scripts')
	@parent    	   	
		@if(Session::has('flash_toastr'))	
			<script type="text/javascript">
				toastr.{{ Session::get('flash_tipo') }}		
				('{{ Session::get('flash_mensaje') }}', '{{ Session::get('flash_titulo') }}')
			</script>
		@endif		

		@if(Session::has('flash_swal'))	
			<script type="text/javascript">
				$(function() {			
				    swal({
				        title: "{{ Session::get('flash_titulo') }}",
				        type: "{{ Session::get('flash_tipo') }}",
				        text: "{{ Session::get('flash_mensaje') }}"
				    });
				});		
			</script>
		@endif		
    @stop	

@endsection
