@extends('layouts.master')

@section('contenido')

	<h2><i class="fa fa-users" aria-hidden="true"></i> Gestión de materias primas</h2>
	<p>
	    A continuación se muestran todas las materias primas registradas en la base de datos, ordenadas alfabéticamente.
    	@if (Auth::user()->isAdmin())
	 		<span class="pull-right"><a href="{{ route('materiaprima.create') }}" class="btn btn-primary">
	    	<i class="fa fa-plus"></i> Registrar una nueva materia prima</a></span>
		@endif		
	</p>
	<br>
	<div class="row">
		<div class="col-md-12">	
			<table id="tabla" class="table table-bordered item">
				<thead>
					<tr>
						@if (Auth::user()->isAdmin())
							<td class="no-sort">Editar</td>						
						@endif
						<td>Nombre</td>
						<td>Stock (kg)</td>
						<td>Stock Mín. (kg)</td>
						<td>Precio (€/Kg)</td>
						<td>Re-Análisis</td>
						<td>Lote</td>
						<td>Acción Específica</td>
						<td>Proveedor</td>
					</tr>
				</thead>
				<tbody>
					@foreach ($materiasPrimas as $materiaPrima)
					<tr>
    					@if (Auth::user()->isAdmin())						
							<td>
								<a class="btn btn-primary" href="{{ route('materiaprima.edit', $materiaPrima) }}">
									<i class="fa fa-bars"></i></a></td>						
						@endif								
						<td>{{ $materiaPrima->nombre }}</td>							
						<td class="text-center">{{ $materiaPrima->stock }}</td>							
						<td class="text-center">{{ $materiaPrima->stock_minimo }}</td>							
						<td class="text-center">{{ $materiaPrima->precio }}</td>
						<td class="text-center">{{ $materiaPrima->reanalisis }}</td>							
						<td class="text-center">{{ $materiaPrima->lote }}</td>							
						<td>{{ $materiaPrima->accion }}</td>							
						<td>{{ $materiaPrima->proveedor->nombre }}</td>
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
				    { "width": "10px",  "targets": 0 }					
				]		 					     
		  	});		  
		 </script>    	    	
    @stop 

@endsection