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

	<h2>{!! $html !!}</h2>	


	<h2></h2>


	<div>
		<ul>
			@forelse($consolas as $consola)
				<li>{{ $consola }}</li>
			@empty
				<p>No hay consolas</p>
			@endforelse
		</ul>


		@if(count($consolas) === 1)
			
			<p>Solo tienes una consola</p>

		@elseif(count($consolas) > 1)

			<p>Tienes varias consolas</p>
		
		@endif		

	</div>

	<header>
		<nav>
			<a href="<?php echo route('home') ?>">Inicio</a>
			<a href="<?php echo route('contactos') ?>">Contactos</a>
		</nav>
	</header>
</body>
</html>
