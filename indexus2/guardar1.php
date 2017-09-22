<?php
	
	require 'conexion.php';
	
	$nro_orden = $_POST['nro_orden'];
	$ruc = $_POST['ruc'];
	$razon_social = $_POST['razon_social'];
	$monto_total = $_POST['monto_total'];
	
	


	
	$sql = "INSERT INTO proveedor (nro_orden, ruc, razon_social,monto_total) VALUES ('$nro_orden', '$ruc', '$razon_social', '$monto_total')";
	$resultado = $mysqli->query($sql);
	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="indexus2.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>