@extends('layouts.scaffold')

@section('main')

<h1>Create Evento</h1>

{{ Form::open(array('route' => 'eventos.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


