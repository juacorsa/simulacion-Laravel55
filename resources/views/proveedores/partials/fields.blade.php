
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
			'autofocus',
			'required' => '',
			'data-parsley-type'             => 'digits',
			'data-parsley-type-message'     => 'El código debe ser un entero positivo',
  			'data-parsley-required-message' => 'El código es un dato requerido',
	        'data-parsley-trigger'          => 'change focusout'
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Nombre</label>
	<div class="col-sm-10">
		{!! Form::text('nombre', null, [
			'class' => 'form-control', 
			'autocomplete' => 'off',
			'required' 	   => '',
  			'data-parsley-required-message'  => 'El nombre es un dato requerido',
	        'data-parsley-trigger'           => 'change focusout',			
			'data-parsley-maxlength'         => '80',
			'data-parsley-maxlength-message' => 'El nombre debe tener como máximo 80 caracteres'		
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Dirección</label>
	<div class="col-sm-10">
		{!! Form::text('direccion', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off',
			'data-parsley-trigger'   => 'change focusout',
			'data-parsley-maxlength' => '80',
			'data-parsley-maxlength-message' => 'La dirección debe tener como máximo 80 caracteres'		
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Población</label>
	<div class="col-sm-10">
		{!! Form::text('poblacion', null, [
			'class' => 'form-control', 
			'autocomplete' => 'off',
			'data-parsley-trigger'   => 'change focusout',			
			'data-parsley-maxlength' => '20',
			'data-parsley-maxlength-message' => 'El población debe tener como máximo 20 caracteres'					
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Teléfono</label>
	<div class="col-sm-10">
		{!! Form::text('telefono', null, [
			'class' => 'form-control', 
			'autocomplete' => 'off',
			'data-parsley-maxlength' => '20',
			'data-parsley-trigger'   => 'change focusout',
			'data-parsley-maxlength-message' => 'El teléfono debe tener como máximo 20 caracteres'					
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Fax</label>
	<div class="col-sm-10">
		{!! Form::text('fax', null, [
			'class' => 'form-control', 
			'autocomplete' => 'off',
			'data-parsley-trigger'   => 'change focusout',
			'data-parsley-maxlength' => '20',
			'data-parsley-maxlength-message' => 'El fax debe tener como máximo 20 caracteres'					
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Contacto</label>
	<div class="col-sm-10">
		{!! Form::text('contacto', null, [
			'class' => 'form-control', 
			'autocomplete' => 'off',
			'data-parsley-trigger'   => 'change focusout',			
			'data-parsley-maxlength' => '40',
			'data-parsley-maxlength-message' => 'El contacto debe tener como máximo 40 caracteres'					
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Email</label>
	<div class="col-sm-10">
		{!! Form::text('email', null, [
			'class' => 'form-control', 
			'autocomplete' => 'off',
			'data-parsley-trigger'   => 'change focusout',			
			'data-parsley-maxlength' => '80',
			'data-parsley-maxlength-message' => 'El email debe tener como máximo 80 caracteres',
			'data-parsley-type' 			 => 'email',
			'data-parsley-type-message' 	 => 'El email no tiene un formato válido'
			]) !!}  	
	</div>	
</div>

