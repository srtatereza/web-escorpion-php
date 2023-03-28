<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Scorpiomania</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
</head>
<body>
	<div class="bloque_login">
		<div class="lenguaje">
			<ul>
				<li><a href="#">ES</a></li>
				<li><a href="#">EN</a></li>
				<li><a href="#">FR</a></li>
				<li><a href="#">IT</a></li>
				<li><a href="#">DE</a></li>
			</ul>
		</div>
		<ul>
			<li>
				Identificate
			</li>
			<li>
				|
			</li>
			<li>
				Registrate
			</li>
		</ul>
	</div>
	<div id="header">
		<div class="imagen-logo">
		<a href="tienda-videojuego.php"><img src="images/scorpion-01.jpg" alt="logo"></a>
		</div>

		<ul id="navigation">
			<li class="current">
				<a href="tienda-videojuego.php">Catálogo</a>
			</li>
			<li>
				<a href="comunidad.html">Comunidad</a>
			</li>
			<li>
				<a href="contacto.html">Contacto</a>
			</li>
			<li>
				<a href="sobrenosotros.html">Nosotros</a>
			</li>
		</ul>
	</div>

	<div id="body">
		<div class="flex">
			<div id="tagline">
				<div>
					<img src="images/imagen_41958.jpg" alt="imagen1">
				</div>
				<div>
					<p>Capitan America</p>
					<p>de <span>Gamma-Ray</span></p>
				</div>
				<div class="comprar">
					<div>
						<button class="boton"><a href="#">Comprar Ahora</a></button>
					</div>
				</div>
			</div>
			<div id="tagline">
				<div>
					<img src="images/imagen_41964.jpg" alt="imagen1">
				</div>
				<div>
					<p>Mujer Maravilla</p>
					<p>de <span>Gamma-Ray</span></p>
				</div>
				<div class="comprar">
					<div>
						<button class="boton"><a href="#">Comprar Ahora</a></button>
					</div>
				</div>
			</div>
		</div>

		<h1> Lo mas nuevo del 2022 </h1>
		<div class="contenido_grid">
			<div>
				<a href="#"><img src="images/imagen_banner_404.jpg" alt="banner1"></a>
			</div>
			<div>
				<a href="#"><img src="images/imagen_banner_405.jpg" alt="banner1"></a>
			</div>
			<div>
				<a href="#"><img src="images/imagen_banner_561.jpg" alt="banner1"></a>
			</div>
			<div>
				<a href="#"><img src="images/imagen_banner_607.jpg" alt="banner1"></a>
			</div>
		</div>
	<div class="regalo">Suscribete y opten uno de estos 4 videojuegos de regalo totalmente GRATIS</div>

	<h1> Las mejores juegos </h1>

	<?php
    $productos = array(
        array (
			'codigo' => '#8543',
            'nombre' => "Bayoneta",
            'precio' => rand(50,80),
            'ruta' => "images/1.jpg",
			'descripcion'=> "Bayonetta es una bruja que cambia de forma y usa varias armas de fuego, junto con ataques mágicos para combocar demonios",
        ),
        array (
			'codigo' => '#2085',
            'nombre' => "Planta & Zombies",
            'precio' => rand(50,80),
            'ruta' => "images/2.jpg",
			'descripcion'=> "El jugador va colocando plantas mutantes en tres lugares diferentes de la casa para detener a la horda de zombis que intenta devorar los cerebros de los residentes.",
        ),
        array (
			'codigo' => '#4096',
            'nombre' => "Mario Broo",
            'precio' => rand(50,80),
            'ruta' => "images/3.jpg",
			'descripcion'=> "Es un videojuego desarrollado por Nintendo en el año 1983. Ha sido presentado como un minijuego en la serie de Super Mario Advance y otros juegos. Mario Bros.",
		),
		array (
			'codigo' => '#7959',
            'nombre' => "Call of Duty",
            'precio' => rand(50,80),
            'ruta' => "images/4.jpg",
			'descripcion'=> "Los campos de batalla cambian ante tus ojos. Un arsenal de vanguardia a tu disposición. El retorno de la guerra total.",
        ),
        array (
			'codigo' => '#2798',
            'nombre' => "Rapido & Furioso",
            'precio' => rand(50,80),
            'ruta' => "images/5.jpg",
			'descripcion'=> "Se describe como un «juego de acción de robo de vehículos y alta velocidad",
        ),
        array (
			'codigo' => '#8518',
            'nombre' => "Rocky Balboa",
            'precio' => rand(50,80),
            'ruta' => "images/6.jpg",
			'descripcion'=> "Espectacular! El juego está firmando a grandes peleadores actuales y leyendas para aparecer en el nuevo videojuego de boxeo",
        ),
        array (
			'codigo' => '#1743',
            'nombre' => "Baseboll 2022 ",
            'precio' => rand(50,80),
            'ruta' => "images/7.jpg",
			'descripcion'=> "Un juego perfecto en el béisbol está definido por las Grandes Ligas de Béisbol como aquel juego en que un pitche",
        ),
        array (
			'codigo' => '#5492',
            'nombre' => "Futbool Infantil",
            'precio' => rand(50,80),
            'ruta' => "images/8.jpg",
			'descripcion'=> "Es un tipo de videojuego deportivo que fue diseñado para simular un partido del deporte real conocido como fútbol, balompié o soccer.",
        ),
    );
    ?>

    <div class="productos">
    <?php
			foreach($productos as $indice => $producto) {	
			?>	
			<div class="producto">
				<div class="contenedor-imagen" 
					onmouseover="onImageMouseover(this)"
					onmouseout="onImageMouseout(this)">
					<img class="imagen" src="<?php echo $producto['ruta'];?>">
					<div class="imagen-descripcion"><?php echo $producto['descripcion']?></div>
				</div>
				<div>
					<p><?php echo $producto['nombre'];?></p>
				</div>
				<div>
					<div>
						<span><?php echo $producto['precio'];?></span><span><?php echo (1.21*$producto['precio']);?></span>
					</div>
				</div>
			</div>
			<?php
			}
			?>
    </div>
	<div id="footer">
		<div>
			<img src="images/scorpion-02.jpg" alt="logo">
			<ul>
				<li>
					<a href="#">¿Qué es Scorpiomania?</a>
				</li>
				<li>
					<a href="#">Contacto</a>
				</li>
				<li>
					<a href="#">Ayuda</a>
				</li>
				<li>
					<a href="#">Trabaja con nosotros</a>
				</li>
				<li>
					<a href="#">Mapa Web</a>
				</li>
			</ul>
		</div>
		<div class ="sigueme">Sigueme</div>
		<div id="connect">
			<a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png"></a>
			<a href="https:/www.instagram.com/" target="_blank"><img src="images/instagram.png"></a>
			<a href="https://twitter.com/" target="_blank"><img src="images/twitter.png"></a>
			<a href="https://www.google.com/" target="_blank"><img src="images/goggle.png"></a>
		</div>
		<div class="pie"> 2022 by Tereza Franco </div>
	</div>

	<script>
		// el setInterval es para ejecutar un codigo cada 9 segundos.
		// miramos si hay un id banner y si lo hay lo borramos y lo volvemos a crear.
		function changeBanner() {
			setInterval(() => {
				const divBanner = document.getElementById('banner');
				if (divBanner) {
					divBanner.remove();
					createBanner();
				}
			}, 9000);
		}
		// creamos el banner con dos productos escogidos de manera aleatoria de array de dos dimensiones que ya tenemos.
		// firstIndex me saca un index random del array.
		//secondIndex me saca otro index random del array que no sea el primero.

		function createBanner() {
			const productos = <?php echo json_encode($productos); ?>;
			const firstIndex = getRandomIndexForArray(productos);
			const secondIndex = getOtherIndex(firstIndex, productos);

			// sacamos dos productos del array con los index anteriores.
			const firstProduct = productos[firstIndex];
			const secondProduct = productos[secondIndex];

			// calcular la oferta del pack. 
			const price = Math.round((firstProduct.precio + secondProduct.precio)*0.9);

			//creamos el div del banner, con dos productos y el precio de la oferta.
			const divBanner = document.createElement('div');
			divBanner.id = 'banner';
			divBanner.innerHTML = `
				<div class="firstProduct">
					<img src="${firstProduct.ruta}">
					<div>
						<p>${firstProduct.nombre}</p>
					</div>
				</div>
				<div class="secondProduct">
					<img src="${secondProduct.ruta}">
					<div>
						<p>${secondProduct.nombre}</p>
					</div>
				</div>
				<div class="precio"> Promocion precio pack: ${price}€</div>
			`;
			// agregamos dentro de body como primer elemento el div del banner.
			document.getElementById("body").prepend(divBanner);
		}
		//creamos el banner la primera vez.
		createBanner();
		//dejamos ejecutando el setInterval para que se vaya actualizando el banner en tiempo real.
		changeBanner();

		// random entre un numero maximo y minimo
		function randomIntFromInterval(min, max) { // min and max included 
			return Math.floor(Math.random() * (max - min + 1) + min)
		}

		// la uso para sacar un index random entre 0 y el ultimo indice del array.
		function getRandomIndexForArray(array) {
			return randomIntFromInterval(0, array.length-1);
		}
		// para sacar otro indice aleatorio que no sea el primero, para evitar que el pack tenga dos veces el mismo producto.
		function getOtherIndex(index, array) {
			let otherIndex = getRandomIndexForArray(array);
			while (otherIndex === index) {
				otherIndex = getRandomIndexForArray(array);}
			return otherIndex;
		}
		//funcion que se ejecuta en el div producto, cuando se lanza el evento  'raton sobre el elemento'.
		//le aplicamos un estilo especifico a la imagen y a la descripcion.
		function onImageMouseover(element) {
			// le aplicamos un background a la imagen
			element.getElementsByClassName('imagen')[0].style.cssText = `
				outline: 100px solid rgba(255,152,0, 0.9) !important;
				color:white; !important;
				outline-offset: -100px;
				overflow: hidden;
				position: relative;
			`;
			// agregamos style.opacity '1' para mostar el texto sobre la imagen.
			element.getElementsByClassName('imagen-descripcion')[0].style.opacity = '1';
		}
		// funcion que se ejecuta en el div producto, cuando se lanza el evento de 'raton sale del elemento'.
		//le aplicamos un estilo especifico a la imagen y a la descripcion.
		function onImageMouseout(element) {
			// le quitamos el estilo aplicado a la imagen
			element.getElementsByClassName('imagen')[0].style.cssText = ``;
			//agregamos style.opacity '0' para ocultar el texto sobre la imagen.
			element.getElementsByClassName('imagen-descripcion')[0].style.opacity = '0';
		}
	</script>
</body>
</html>