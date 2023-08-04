<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saludo</title>
</head>
<body>
	<h1>Saludos para <?php echo $nombre; ?></h1>

	<h1>Saludos para {{ $nombre }}</h1>

	<h2>{{!! $html !!}}</h2>	

	<header>
		<nav>
			<a href="<?php echo route('home') ?>">Inicio</a>
			<a href="<?php echo route('contactos') ?>">Contactos</a>
		</nav>
	</header>
</body>
</html>
