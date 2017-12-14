
<div class="form-group"> 	  
	<div class="col-sm-offset-2 col-sm-8 error">			
		@if($errors->any())
			Atención, se han detectado los siguientes errores:			
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		@endif
	</div>
</div>

{!! Form::hidden('id', null) !!}

<div class="form-group">   		
	<label class="col-sm-2 control-label">Código</label>
	<div class="col-sm-3">
		{!! Form::text('codigo', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off', 
			'autofocus'	   => '',
			'required' 	   => '',
  			'data-parsley-required-message' => 'El código es un dato requerido',
	        'data-parsley-trigger'          => 'change focusout',
			'data-parsley-type'             => 'digits',
			'data-parsley-type-message'     => 'El código debe ser un entero positivo',
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Nombre</label>
	<div class="col-sm-10">
		{!! Form::text('nombre', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off',
			'required'     => '',   			
  			'data-parsley-required-message'  => 'El nombre es un dato requerido',
	        'data-parsley-trigger' 	         => 'change focusout',			
			'data-parsley-maxlength'         => '100',
			'data-parsley-maxlength-message' => 'El nombre debe tener como máximo 100 caracteres'
			]) !!}  	
	</div>	
</div>

