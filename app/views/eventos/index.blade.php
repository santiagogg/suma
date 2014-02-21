@extends('layouts.scaffold')

@section('main')

<h1>All Eventos</h1>

<p>{{ link_to_route('eventos.create', 'Add new evento') }}</p>

@if ($eventos->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Descripcion</th>
				<th>Inicio</th>
				<th>Fin</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($eventos as $evento)
				<tr>
					<td>{{{ $evento->titulo }}}</td>
					<td>{{{ $evento->descripcion }}}</td>
					<td>{{{ $evento->inicio }}}</td>
					<td>{{{ $evento->fin }}}</td>
					<td>{{{ $evento->precio }}}</td>
                    <td>{{ link_to_route('eventos.edit', 'Edit', array($evento->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('eventos.destroy', $evento->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no eventos
@endif

@stop
