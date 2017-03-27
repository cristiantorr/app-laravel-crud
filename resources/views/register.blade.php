@extends('layouts.main')
@section('title', 'Inicio')
@section('content')


<h2>FORMULARIO DE REGISTRO</h2>
<div class="row">
  <div class="col-xs-12 col-md-12  col-sm-12 col-lg-6">
    {!! Form::open(['url' => route('registerSubmit'), 'method' => 'POST', 'id' => 'register-user', 'data-parsley-validate' => '']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre Completo') !!}
            <div class="input-group">
              {!! Form::text('name', null, ['class' => 'validate form-control', 'data-parsley-required' => 'true']) !!}
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            </div>
        </div>
         <div class="form-group">
            {!! Form::label('age', 'Edad') !!}
            <div class="input-group">
              {!! Form::text('age', null, ['class' => 'validate form-control', 'data-parsley-required' => 'true']) !!}
              <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
            </div>
        </div>
         <div class="form-group">
            {!! Form::label('email', 'Correo Electrónico') !!}
            <div class="input-group">
              {!! Form::text('email', null, ['class' => 'validate form-control', 'data-error' => "Bruh, that email address is invalid"]) !!}
              <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('city', 'Ciudad') !!}
            <div class="input-group">     
              {!!Form::select('city', $updateCities, null, ['class' => 'validate form-control', 'data-parsley-required' => 'true'])  !!}
              <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Teléfono') !!}
            <div class="input-group">
              {!! Form::text('phone', null, ['class' => 'validate form-control', 'data-parsley-required' => 'true']) !!}
              <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
    {!! Form::submit('Registrarse', ['class' => 'btn btn-primary', 'id' => 'registerSubmit' ] ) !!}
    {!! Form::close() !!}
  </div>
  <div class="col-xs-12 col-md-12 col-sm-12 col-lg-6">
      <div class="col-md-12">
          @if ( session('message') )
           <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-ok"></span> {{ session('message') }}</strong>
            </div>
          @endif
          @if ( $errors )
           
              @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                 <span class="glyphicon glyphicon-remove"></span>
                 {{ $error }}<br>
                </div>  
              @endforeach
            
          @endif
          
      </div>
  
  </div>
</div>
@endsection
