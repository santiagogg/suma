@extends('layouts.scaffold')

@section('main')

<h1>Edit Evento</h1>
{{ Form::model($evento, array('method' => 'PATCH', 'route' => array('eventos.update', $evento->id))) }}
	<ul>
        <li>
            {{ Form::label('titulo', 'Titulo:') }}
            {{ Form::text('titulo') }}
        </li>

        <li>
            {{ Form::label('descripcion', 'Descripcion:') }}
            {{ Form::textarea('descripcion') }}
        </li>

        <li>
            {{ Form::label('inicio', 'Inicio:') }}
            {{ Form::text('inicio') }}
        </li>

        <li>
            {{ Form::label('fin', 'Fin:') }}
            {{ Form::text('fin') }}
        </li>

        <li>
            {{ Form::label('precio', 'Precio:') }}
            {{ Form::text('precio') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('eventos.show', 'Cancel', $evento->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
