<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/emergentes.css" />
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<title>Alert</title>
</head>

<body>
	<?php

		$id = isset($_GET['id']) ? $_GET['id'] : null;

		if($id == 1){
			echo '<h3>¡Enhorabuena! Has subido tu primera foto, esto solo acaba de empezar.</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 2){
			echo '<h3>¡Estás empezando a tener seguidores y likes! ¿No es genial?</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 3){
			echo '<h3>Estás siendo muy activo, sigue así que llegarán recompensas</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 4){
			echo '<h3>¿Has visto cuántos seguidores tienes ya? ¡Te estás haciendo muy popular!</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 5){
			echo '<h3>¡Una marca te ha ofrecido una colaboración, vas a recibir 1000€ y mucha fama!</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
		else if($id == 6){
			echo '<h3>¡Tu popularidad no tiene límites! Tienes más seguidores que todos tus amigos, dales envidia</h3>';
			echo '<button id="botonCerrar" onclick=window.close()>Aceptar</button>';
		}
	?>

</body>
</html>