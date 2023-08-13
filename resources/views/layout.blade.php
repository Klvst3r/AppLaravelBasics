<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	 <style>
		.active{
			text-decoration: none;
			color: green;
		}
	</style>


</head>
<body>
	
	<header>


	<h1>
		{{ request()->is('/') ? 'Estás en el Home' : 'No estas en el home' }}
	</h1>  
		
		<nav>
			<a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
			<a class="{{ request()->is('saludos/Klvst3r') ? 'active' : '' }}" href="{{ route('saludos','Klvst3r') }}">Saludo</a>
			<a class="{{ request()->is('contactame') ? 'active' : '' }}" href="{{ route('contactos') }}">Contactos</a>
		</nav>
	</header>

	@yield('contenido')	

	<footer>Copyright ℗ {{ date('Y') }} </footer>
</body>
</html>