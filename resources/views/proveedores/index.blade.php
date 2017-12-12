@extends('layouts.master')

@section('contenido')
	
	<h2><i class="fa fa-users" aria-hidden="true"></i> Gestión de proveedores</h2>
	<p>
	    A continuación se muestran todos los proveedores registrados en la aplicación, ordenados alfabéticamente.
		<span class="pull-right"><a href="{{ route('proveedor.create') }}" class="btn btn-primary">
	    	<i class="fa fa-plus"></i> Registrar un nuevo proveedor</a></span>
	</p>
	<br>
	<div class="row">
		<div class="col-md-12">	
			<table id="tabla" class="table table-bordered item">
				<thead>
					<tr>
						<td class="no-sort">Editar</td>
						<td>Código</td>
						<td>Nombre</td>
						<td>Dirección</td>
						<td>Población</td>
						<td>Teléfono</td>
						<td>Fax</td>
						<td>Contacto</td>
						<td>Email</td>
					</tr>
				</thead>
				<tbody>
					@foreach ($proveedores as $proveedor)
						<tr>
							<td>
								<a class="btn btn-primary" href="{{ route('proveedor.edit', $proveedor) }}">
									<i class="fa fa-bars"></i>									
								</a>						
							</td>
							<td class="text-center">{{ $proveedor->codigo }}</td>							
							<td>{{ $proveedor->nombre }}</td>							
							<td>{{ $proveedor->direccion }}</td>							
							<td>{{ $proveedor->poblacion }}</td>
							<td>{{ $proveedor->telefono }}</td>							
							<td>{{ $proveedor->fax }}</td>
							<td>{{ $proveedor->contacto }}</td>							
							<td>{{ $proveedor->email }}</td>														
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	@section('scripts')
	@parent    	
		<script>
		  	$('#tabla').DataTable({	
		  		"pagingType": "simple",
		  		"stateSave" : true,	  			  		
				"language"  : { "url": "{{ asset('/json/spanish.json')}}" },
				"columnDefs": [
				    { "width": "10px",  "targets": 0 },
					{ "width": "10px",  "targets": 1 }
				]		 					     
		  	});		  
		 </script>    	   			
    @stop
        
@endsection