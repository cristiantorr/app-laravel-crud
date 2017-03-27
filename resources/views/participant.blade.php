@extends('layouts.main')
@section('title', 'Inicio')
@section('content')
	
	@if (session('messageDelete'))
		 <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-ok"></span> {{ session('messageDelete') }}</strong>
         </div>
	@endif
	<div></div>
	<h1>Lista de participantes<small style="padding-left: 16px;"><a href="{{ route('updateCitiesView') }}">Crear Participante</a></small></h1>

	@if (isset($participants))
		<div class="table-responsive">
			<table class="table table-hover" style="margin-bottom: 0">
			  <thead class="thead-inverse">
			    <tr>
			      <th>#</th>
			      <th>Nombres</th>
			      <th>Edad</th>
			      <th>Email</th>
			      <th>Ciudad</th>
			      <th>Teléfono</th>
			    </tr>
			  </thead>
			  <tbody>
				@foreach ($participants as $participant)
				    <tr>
				      <td scope="row">{{ $participant->id }}</td>
				      <td>{{ $participant->name }}</td>
				      <td>{{ $participant->age }}</td>
				      <td>{{ $participant->email }}</td>
				      <td>{{ $participant->city->name }}</td>
				      <td>{{ $participant->phone }}</td>
				     
				      <td><a class="btn btn-primary" href="{{ route('participantUpdateView', $participant->id) }}">Actualizar</a></td>
		              <td>{!! Form::open(['method' => 'DELETE',
		            		'route' => ['participantDelete', $participant->id]]) !!}
		            		        <input type="hidden" name="_token" value="{{csrf_token()}}">

					            {!! Form::submit('Eliminar participante', ['class' => 'btn btn-danger']) !!}
					        {!! Form::close() !!}
						</td>
				    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>	
		<div class="table-paginate col-md-12 text-center">{{ $participants->links() }}</div>
	@endif
@endsection
