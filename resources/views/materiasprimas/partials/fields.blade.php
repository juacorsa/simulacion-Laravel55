
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
	<label class="col-sm-2 control-label">Nombre</label>
	<div class="col-sm-8">
		{!! Form::text('nombre', null, [
			'class' 	   => 'form-control', 
			'autofocus'    => '',
			'autocomplete' => 'off',
			'required'     => '',   			
  			'data-parsley-required-message'  => 'El nombre es un dato requerido',	        
			'data-parsley-maxlength'         => '100',
			'data-parsley-maxlength-message' => 'El nombre debe tener como máximo 100 caracteres'
			]) !!}  				
	</div>		
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Stock (Kg)</label>
	<div class="col-sm-3">
		{!! Form::text('stock', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off',
			'required'     => '',   
  			'data-parsley-required-message' => 'El stock es un dato requerido',	        			
			'data-parsley-type' 			=> 'number',
			'data-parsley-type-message' 	=> 'El stock no tiene un formato válido'  						
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Stock Mín. (Kg)</label>
	<div class="col-sm-3">
		{!! Form::text('stock_minimo', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off',
			'required'     => '',   
  			'data-parsley-required-message' => 'El stock es un dato requerido',	        			
			'data-parsley-type' 			=> 'number',
			'data-parsley-type-message' 	=> 'El stock no tiene un formato válido'  							
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Precio (€/Kg)</label>
	<div class="col-sm-3">
		{!! Form::text('precio', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off',
			'required'     => '',   
  			'data-parsley-required-message' => 'El precio es un dato requerido',	        			
			'data-parsley-type' 			=> 'number',
			'data-parsley-type-message' 	=> 'El precio no tiene un formato válido'  							
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Re-Análisis</label>
	<div class="col-sm-3">
		{!! Form::text('reanalisis', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off',
			'placeholder'  => 'mm/aaaa'
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Lote</label>
	<div class="col-sm-3">
		{!! Form::text('lote', null, [
			'class' 	   => 'form-control', 
			'autocomplete' => 'off',
			'required'     => '',   
  			'data-parsley-required-message'  => 'El lote es un dato requerido',	        			
			'data-parsley-maxlength'         => '10',
			'data-parsley-maxlength-message' => 'El lote debe tener como máximo 10 caracteres'		
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Acción</label>
	<div class="col-sm-8">
		{!! Form::text('accion', null, [
			'class' 	   => 'form-control', 
			'placeholder'  => 'Acción específica',
			'autocomplete' => 'off',
			]) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Proveedor</label>
	<div class="col-sm-8">		
		{!! Form::select('proveedor_id', $proveedores, null, array('class' => 'form-control')) !!}	     		
	</div>	
</div>


