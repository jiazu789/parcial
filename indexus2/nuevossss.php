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
				<h3 style="text-align:center">NUEVO REGISTROS</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardarr.php" autocomplete="off">
				
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
						<a href="indexus2.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>





</html>