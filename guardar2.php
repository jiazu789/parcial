<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['password'];
	$tipo_usuario = $_POST['tipo_usuario'];
	
	


	
	$sql = "INSERT INTO usuarios (nombre, usuario, password,tipo_usuario) VALUES ('$nombre', '$usuario', '$clave', '$tipo_usuario')";
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