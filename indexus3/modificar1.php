<?php
	require '../conexion.php';
	
	$id_bienes = $_GET['id_bienes'];
	
	$sql = "SELECT * FROM bienes  WHERE id_bienes = '".$id_bienes."'";
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
		
			
			<form class="form-horizontal" method="POST" action="update1.php" autocomplete="off">
	



	<div class="form-group">
					<label for="id_bienes" class="col-sm-2 control-label">id_bienes</label>
					<div class="col-sm-10">
						<input disabled type="text" class="form-control" id="id_bienes" name="id_bienes" value="<?php echo $row['id_bienes']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">descripcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" required>
					</div>
				</div>

				<div class="form-group">
					<label for="tipo" class="col-sm-2 control-label">tipo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo" required>
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