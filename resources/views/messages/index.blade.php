@extends('layout')

@section('contenido')
	<h1>Todos los mensajes</h1>

	<table>
		<thead>
			<tr>
				<th>Nombre</th>
			    <th>Email</th> 
			    <th>Mensaje</th>
			</tr>
		</thead>
		<tbody>
			@foreach($messages as $message)
			 <tr>
			 	<td>{{  $message->nombre }}</td>
			 	<td>{{  $message->email }}</td>
			 	<td>{{  $message->mensaje }}</td>
			 </tr>
			@endforeach
		</tbody>
	</table>

@stop	