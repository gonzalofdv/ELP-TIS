<?php
session_start();
//require_once __DIR__.'/includes/config.php';
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8">

	<title>Portada</title>
</head>

<body>
<?php
	require("includes/comun/cabecera.php");
	require("includes/comun/sidebarIzq.php");

	$cont = isset($_SESSION['cont']) ? $_SESSION['cont'] : 0;

	echo '<div id="contenido">';


	if(isset($_SESSION['contGeneral']) AND $_SESSION['contGeneral'] >= 10){
		$_SESSION['contGeneral'] = 0;
	?>
		<script> 
			window.location.replace('explicacion/index.html'); 
		</script>
	<?php
		//header('Location: https://lamejorredsocialelp.000webhostapp.com/explicacion/index.html');
		//header('Location: explicacion/index.html');
	}

	if($cont == 0){
		echo '<h1 class="parpadea" id="tituloPrincipal">Bienvenido a la mejor red social del mundo</h1>';
		echo '<img src="flechaIzq.gif"><img src="flechaIzq.gif"><img src="flechaIzq.gif"><img src="flechaIzq.gif"><img src="flechaIzq.gif"><img src="flechaIzq.gif"><img src="flechaIzq.gif">';
		echo '<p id="parrafoPrincipal" style="color:red; font-weight:bold;"> ANTES DE EMPEZAR, DESACTIVA EL BLOQUEO DE POP-UPS DEL NAVEGADOR, O CUANDO EMPIECES A INTERACTUAR Y SE BLOQUEE EL POP-UP, DALE PERMISOS PARA EL CORRECTO FUNCIONAMIENTO DE LA PÁGINA</p>';
		echo '<p id="parrafoPrincipal"> Prueba a subir tu primera foto pulsando el botón de la barra lateral izquierda, verás que bien sienta, podrás comentar las fotos y empezarás a tener seguidores, likes, mensajes y mucha popularidad.</p>';
		echo '<p id="parrafoPrincipal"> Pero no intentes salir... </p>';
		echo '<p align=center><img src="prohibido.gif"></p>';
	}
	else{

		if($cont >= 10){
			echo '<img class="foto" src="audi.jpg" alt="mona lisa">';
			echo '<h2>¡Esta publicación es en colaboración con Audi! Estamos sorteando este COCHAZO</h2>';
			if(isset($_SESSION['foto10'])){
				echo '<p>Puro comfort</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto10">Añadir comentario</button>';
			}

			if($cont == 10){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=6", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 9){
			echo '<img class="foto" src="bernabeu.jpg" alt="pingüinos">';
			echo '<h2>Concierto en el Santiago Bernabeu!</h2>';
			if(isset($_SESSION['foto9'])){
				echo '<p>Espectacular</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto9">Añadir comentario</button>';
			}
		}

		if($cont >= 8){
			echo '<img class="foto" src="plaza.JPG" alt="mona lisa">';
			echo '<h2>¡Qué bonita es la plaza de mi pueblo cuando nieva!</h2>';
			if(isset($_SESSION['foto8'])){
				echo '<p>¡Y es enorme!</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto8">Añadir comentario</button>';
			}

			if($cont == 8){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=5", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 7){
			echo '<img class="foto" src="perro.jpg" alt="pingüinos">';
			echo '<h2>Pasear mi perro me da la vida...</h2>';
			if(isset($_SESSION['foto7'])){
				echo '<p>Siempre haciendo rutas</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto7">Añadir comentario</button>';
			}
		}

		if($cont >= 6){
			echo '<img class="foto" src="covadonga.jpg" alt="mona lisa">';
			echo '<h2>Mi viaje a Asturias fue precioso, los lagos de Covadonga son increíbles</h2>';
			if(isset($_SESSION['foto6'])){
				echo '<p>Además hacia un clima perfecto</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto6">Añadir comentario</button>';
			}

			if($cont == 6){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=4", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 5){
			echo '<img class="foto" src="monoply.jpg" alt="monoply">';
			echo '<h2>El otro día enseñé a mis sobrinos a jugar al monopoly, ¡se lo pasaron pipa!</h2>';
			if(isset($_SESSION['foto5'])){
				echo '<p>Son unos magnates jejeje</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto5">Añadir comentario</button>';
			}
		}

		if($cont >= 4){
			echo '<img class="foto" src="personasFelices.jpg" alt="mona lisa">';
			echo '<h2>El otro día pude disfrutar con mis amigos en la playa (somos 7, pero en mi localidad se permitían 10 personas)</h2>';
			if(isset($_SESSION['foto4'])){
				echo '<p>Menudo atardecer eh</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto4">Añadir comentario</button>';
			}

			if($cont == 4){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=3", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 3){
			echo '<img class="foto" src="IBIZAderisas.jpg" alt="pingüinos">';
			echo '<h2>Recuerdos del 2019... cuando podíamos irnos de fiesta a Ibiza :(</h2>';
			if(isset($_SESSION['foto3'])){
				echo '<p>Mi favorito fue David Guetta</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto3">Añadir comentario</button>';
			}

			if($cont == 3){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=2", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

		if($cont >= 2){
			echo '<img class="foto" src="monalisa.jpg" alt="mona lisa">';
			echo '<h2>Este cuadro es la mayor obra de la historia por excelencia</h2>';
			if(isset($_SESSION['foto2'])){
				echo '<p>¡Ójala volver a verlo!</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto2">Añadir comentario</button>';
			}
		}

		if($cont >= 1){
			echo '<img class="foto" src="pinguinos.jpg" alt="pingüinos">';
			echo '<h2>¡Estos pingüinos son adorables!</h2>';
			if(isset($_SESSION['foto1'])){
				echo '<p>¡Qué pingüinos más bonitos :)!</p>';
			}
			else{
				echo '<button id="button-comentario" onclick=location.href="accionSubirComentario.php?foto=foto1">Añadir comentario</button>';
			}

			if($cont == 1){
				echo '<script type="text/javascript">window.open("ventanasEmergentes.php?id=1", "nombrePop-Up", "width=600,height=350, top=250,left=350");</script>';
			}
		}

	}
	
	echo '</div>';

?>
	
<?php

	require("includes/comun/sidebarDer.php");
	require("includes/comun/pie.php");

?>


</div>

</body>
</html>
