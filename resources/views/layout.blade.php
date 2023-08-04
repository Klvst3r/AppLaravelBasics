<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	
	<header>
		<nav>
			<a href="<?php echo route('home') ?>">Inicio</a>
			<a href="<?php echo route('saludos', 'klvst3r') ?>">Saludos</a>
			<a href="<?php echo route('contactos') ?>">Contactos</a>
		</nav>
	</header>

	@yield('contenido')	

	<footer>Copyright ℗ {{ date('Y') }} </footer>
</body>
</html>