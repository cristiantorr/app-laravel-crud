@extends('layouts.main')
@section('title', 'Inicio')
@section('content')
@if (session('messageUpdate'))
	<div class="alert alert-success">
          <strong><span class="glyphicon glyphicon-ok"></span> {{ session('messageUpdate') }}</strong>
    </div>
@endif	
<h1>Acualizar usuario</h1>
@if (isset($participantData))
    <!-- rellenar un formulario basado en el contenido de un modelo. Para ello, utilice el método Form :: model: -->
	{!! Form::open(['route' => ['participantUpdate', $participantData['id'], 'method' => 'PATCH']]) !!}
	    <div class="form-group">
	        {!! Form::label('name', 'Nombre Completo') !!}
	        <div class="input-group">
	          {!! Form::text('name', $participantData['name'], ['class' => 'validate form-control']) !!}
	          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	        </div>
	    </div>
	     <div class="form-group">
	        {!! Form::label('age', 'Edad') !!}
	        <div class="input-group">
	          {!! Form::text('age', $participantData['age'], ['class' => 'validate form-control']) !!}
	          <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
	        </div>
	    </div>
	    <div class="form-group">
	        {!! Form::label('email', 'Correo Electrónico') !!}
	        <div class="input-group">
	          {!! Form::text('email', $participantData['email'], ['class' => 'validate form-control']) !!}
	          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
	        </div>
	    </div>
	    <div class="form-group">
	        {!! Form::label('city', 'Ciudad') !!}
	        <div class="input-group">     
	          {!!Form::select('city', $updateCitiesData, $participantData['city']['id'], ['class' => 'validate form-control'])  !!}
	          <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
	        </div>
	    </div>
	    <div class="form-group">
	        {!! Form::label('phone', 'Teléfono') !!}
	        <div class="input-group">
	          {!! Form::text('phone', $participantData['phone'], ['class' => 'validate form-control']) !!}
	          <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
	        </div>
	    </div>
	     <input type="hidden" name="_token" value="{{csrf_token()}}">
	    {!! Form::submit('Actualizar Participante', ['class' => 'btn btn-primary']) !!}
	    <a class="btn btn-danger" href="{{ route('participantView') }}">Cancelar</a>
	{!! Form::close() !!}
@endif
@endsection
