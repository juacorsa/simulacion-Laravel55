@extends('layouts.master')

@section('contenido')
	<h2><i class="fa fa-users" aria-hidden="true"></i> Registrar una nueva materia prima</h2>
	<p>
	    A continuación podrás registrar una nueva materia prima. </p>
	<hr/>
	<div class="col-sm-8">
		{!! Form::open(['class' => 'form-horizontal', 'route' => 'materiaprima.store', 'method' => 'POST', 'data-parsley-validate' => '']) !!}

			@include('materiasprimas.partials.fields')		

			<div class="form-group">
	        	<div class="col-sm-offset-2 col-sm-10">				
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-plus"></i> Registrar materia prima</button>	
						<a class="btn btn-danger" href="{{ route('materiasprimas.index') }}">
							<i class="fa fa-check"></i> Volver al listado de materias primas</a>
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
				        type : "{{ Session::get('flash_tipo') }}",
				        text : "{{ Session::get('flash_mensaje') }}"
				    });
				});		
			</script>
		@endif	

		<script>
		    window.ParsleyConfig = {
		        errorsWrapper: '<div></div>',
		        errorTemplate: '<div class="error" role="alert"></div>',
		        errorClass   : 'has-error',
		        successClass : 'has-success'
		    };
		</script>

		<script src="http://parsleyjs.org/dist/parsley.js"></script>
    @stop

@endsection
