@extends('layouts.master')

@section('contenido')
	
	<h2><i class="fa fa-users" aria-hidden="true"></i> Gestión de productos</h2>
	<p>
	    A continuación se muestran todos los productos registrados en la aplicación, ordenados alfabéticamente.
	    @if (Auth::user()->isAdmin())						
			<span class="pull-right"><a href="{{ route('producto.create') }}" class="btn btn-primary">
		    	<i class="fa fa-plus"></i> Registrar un nuevo producto</a></span>
	    @endif
	</p>
	<br>
	<div class="row">
		<div class="col-md-8">	
			<table id="tabla" class="table table-bordered item">
				<thead>
					<tr>
    					@if (Auth::user()->isAdmin())												
							<td class="no-sort">Editar</td>
						@endif
						<td>Código</td>
						<td>Nombre</td>
					</tr>
				</thead>
				<tbody>
					@foreach ($productos as $producto)
					<tr>
						@if (Auth::user()->isAdmin())
							<td>
								<a class="btn btn-primary" href="{{ route('producto.edit', $producto) }}">
									<i class="fa fa-bars"></i>									
								</a>						
							</td>
						@endif
						<td class="text-center">{{ $producto->codigo }}</td>							
						<td>{{ $producto->nombre }}</td>							
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