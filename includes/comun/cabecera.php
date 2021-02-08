<div id="cabecera">
	<h1 style='font-size: 50px;'>World's best social media</h1>
	<script>
	function ventanaNueva(documento){	
		window.open(documento,'nuevaVentana','width=300, height=400');
	}
	</script>
	<?php
	$tamano = 20;
	if(isset($_SESSION['contGeneral'])) {
		$tamano -= $_SESSION['contGeneral']*2;
		if($tamano <= 0) {

		}
		else {
			?>
			<button id='button-salir' style='FONT-FAMILY: Verdana; font-size:<?php echo $tamano;?>px; width: <?php echo $tamano*10;?>px; height: <?php echo $tamano*4;?>px;' onclick='alert("¡QUÉDATE! Estás en la mejor red social del mundo, no te vas a ir así como así.")'>Salir</button>
			<?php
		}
	}
	else {
		?>
		<button id='button-salir' style='FONT-FAMILY: Verdana; font-size:<?php echo $tamano;?>px; width: <?php echo $tamano*10;?>px; height: <?php echo $tamano*4;?>px;' onclick='alert("¡QUÉDATE! Estás en la mejor red social del mundo, no te vas a ir así como así.")'>Salir</button>
		<?php
	}
	?>
</div>

