<div style='font-size: 23px;' id="sidebar-left">
	<ul>
		<ul style='font-size: 30px;'>Seguidores: <?php 
		if(isset($_SESSION['seguidores'])) echo $_SESSION['seguidores'];
		else echo "0"; 
		?>
		</a></ul>
		<ul><button id="button-subir-foto" onclick=location.href="accionSubirFoto.php" style='font-size: 20px; width:160px; height:60px'>Subir foto</button></ul>
	</ul>
	<div style='font-size: 23px;' id="publi">
		<h2 style='font-size: 30px;'>Espacio publicitario</h2>
		<p>¡COMPRA! ¡COMPRA! ¡COMPRA! ¡COMPRA!</p>
		<p>La nueva bebida energética de moda entre los jovenes, ¡pruébala ya!</p>	
		<img class="fotoAnuncio" src="anuncio.jpg" alt="anuncio">
	</div>
	<!--aqui poner movidas de publi-->
</div>
