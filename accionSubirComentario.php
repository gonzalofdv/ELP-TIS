<?php
session_start();
$_SESSION['contGeneral'] += 1;
$foto = isset($_GET['foto']) ? $_GET['foto'] : null;
$_SESSION[$foto] = true;
$incSeguidores = pow(rand(2, 3), $_SESSION["cont"]);
//esto va incrementando los seguidores cada vez mas
$_SESSION["seguidores"] += $incSeguidores;
//esto incrementa los seguidores nuevos
$_SESSION["newSeguidores"] = $incSeguidores;
//esto incrementa los me gusta
$_SESSION["likes"] += rand(3, 5) * $_SESSION["cont"];
//esto incrementa los mensajes
$_SESSION["mensajes"] += rand(2, 3) * $_SESSION["cont"];

header("Location:index.php");

?>