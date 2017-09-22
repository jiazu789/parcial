<?php
	require '../conexion.php';
	
	$id_inventario = $_GET['id_inventario'];
	$sql = "SELECT * FROM inventario  WHERE id_inventario = '".$id_inventario."'";
	
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			
			<form class="form-horizontal" method="POST" action="update3.php" autocomplete="off">
	



	
	<div class="form-group">
					<label for="id_inventario" class="col-sm-2 control-label">id_inventario</label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" id="id_inventario" name="id_inventario" 
						value="<?php echo $row['id_inventario']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="ubicacion" class="col-sm-2 control-label">ubicacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="ubicacion"  value="<?php echo $row['ubicacion']; ?>" required>
					</div>
				</div>
				
				
				
			
			
				
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="indexus3.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>