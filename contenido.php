<?php

//Inicio del procesamiento
//session_start();

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Perfil</title>
</head>

<body>

<div id="contenedor">

<?php
	require("includes/comun/cabecera.php");
	require("includes/comun/sidebarIzq.php");
?>

	<div id="contenido">

	<?php
		if (!isset($_SESSION['login'])) {//dependiendo del numero de interacciones cambiar este mensaje
			echo "<h1>Perfil</h1>";
			echo "<p>Aquí puedes ver tus fotos, que no son tan guays como las del resto</p>";
		} else {
	?>
	<?php
		}
	?>
	</div>

<?php

	require("includes/comun/sidebarDer.php");
	require("includes/comun/pie.php");

?>


</div>

</body>
</html>