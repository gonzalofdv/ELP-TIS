	<div style='font-size: 23px;' id="sidebar-right">
		<h3 style='font-size: 30px;'>Notificaciones</h3>
		<p>
		<?php
		if(isset($_SESSION['newSeguidores'])) echo  "Nuevos seguidores: <b>".$_SESSION['newSeguidores']. "</b></br>";
		else echo "<br/>"; 
		if(isset($_SESSION['likes'])) echo "Tienes <b>".$_SESSION['likes']."</b> likes nuevos</br>";
		else echo "<br/>";
		if(isset($_SESSION['mensajes'])) echo "Tienes <b>".$_SESSION['mensajes']."</b> mensajes nuevos</br>";
		else echo "<br/>"; 
		?>
		</p>
	</div>