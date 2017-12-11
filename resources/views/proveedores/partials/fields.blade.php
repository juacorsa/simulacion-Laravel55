
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
		{!! Form::text('codigo', null, ['class' => 'form-control', 'autocomplete' => 'off', 'autofocus']) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Nombre</label>
	<div class="col-sm-8">
		{!! Form::text('nombre', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Dirección</label>
	<div class="col-sm-8">
		{!! Form::text('direccion', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Población</label>
	<div class="col-sm-8">
		{!! Form::text('poblacion', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Teléfono</label>
	<div class="col-sm-8">
		{!! Form::text('telefono', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Fax</label>
	<div class="col-sm-8">
		{!! Form::text('fax', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Contacto</label>
	<div class="col-sm-8">
		{!! Form::text('contacto', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}  	
	</div>	
</div>

<div class="form-group">   		
	<label class="col-sm-2 control-label">Email</label>
	<div class="col-sm-8">
		{!! Form::text('email', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}  	
	</div>	
</div>

