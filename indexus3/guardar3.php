<?php
	
	require '../conexion.php';
	
	$codigo_unico = $_POST['codigo_unico'];
	$id_bienes = $_POST['id_bienes'];
	$ubicacion = $_POST['ubicacion'];
	$fecha_ingreso = $_POST['fecha_ingreso'];
	$id_responsable = $_POST['id_responsable'];
	
	


	
	$sql = "INSERT INTO inventario (codigo_unico, id_bienes, ubicacion,fecha_ingreso,id_responsable) 
	VALUES ('$codigo_unico', '$id_bienes', '$ubicacion', '$fecha_ingreso','$id_responsable')";
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
					
					<a href="indexus3.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>