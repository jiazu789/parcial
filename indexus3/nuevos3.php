<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTROS INVENTARIO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar3.php" autocomplete="off">
				
<div class="form-group">
					<label for="codigo_unico" class="col-sm-2 control-label">codigo_unico</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="codigo_unico" name="codigo_unico" placeholder="codigo_unico" required>
					</div>
				</div>


<div class="form-group">
					<label for="id_bienes" class="col-sm-2 control-label">id_bienes</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_bienes" name="id_bienes" placeholder="id_bienes" required>
					</div>
				</div>
				

				

				<div class="form-group">
					<label for="ubicacion" class="col-sm-2 control-label">ubicacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="ubicacion" required>
					</div>
				</div>
				<div class="form-group">
					<label for="fecha_ingreso" class="col-sm-2 control-label">fecha_ingreso</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" placeholder="fecha_ingreso" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_responsable" class="col-sm-2 control-label">id_responsable</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_responsable" name="id_responsable" placeholder="id_responsable" required>
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

