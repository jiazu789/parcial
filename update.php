<?php
	
	require 'conexion.php';

	$cod_usu = $_POST['cod_usu'];
    $nombre = $_POST['nombre'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['password'];
	$tipo_usuario = $_POST['tipo_usuario'];

	
	
$sql = "UPDATE usuarios SET nombre='".$nombre."',usuario='".$usuario."', password='".$clave."', tipo_usuario='".$tipo_usuario."'  WHERE cod_usu = '".$cod_usu."'";
echo $sql;
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="indexad.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
