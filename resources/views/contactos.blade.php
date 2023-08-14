@extends('layout')

@section('contenido')

<h1>Contactos</h1>

<h2>Escribeme</h2>

<form method="POST" action="contacto">

	 @csrf
	
	<p><label for="nombre">
		Nombre
		<input type="text" name="nombre" value={{ old('nombre') }}>
		{{ $errors->first('nombre') }}
	</label></p>
	
	<p><label for="email">
		Email
		<input type="text" name="email" value={{ old('email') }}>
		{{ $errors->first('email') }}
	</label></p>
	
	<p><label for="nombre">
		Mensaje
		<textarea name="mensaje"></textarea>
		{{ $errors->first('mensaje') }}

	</label></p>
	
	<input type="submit" value="Enviar">

</form>
<hr>

@stop