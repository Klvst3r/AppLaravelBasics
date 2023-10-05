@extends('layout')

@section('contenido')
	<h1>Todos los mensajes</h1>

	<table width="100%" border = "1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
			    <th>Email</th> 
			    <th>Mensaje</th>
			</tr>
		</thead>
		<tbody>
			@foreach($messages as $message)
			 <tr>
			 	<td>{{  $message->id }}</td>
			 	<td>{{  $message->nombre }}</td>
			 	<td>{{  $message->email }}</td>
			 	<td>{{  $message->mensaje }}</td>
			 </tr>
			@endforeach
		</tbody>
	</table>

@stop	