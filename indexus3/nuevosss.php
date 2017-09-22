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
				<h3 style="text-align:center">NUEVO REGISTROS PROVEEDOR</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar1.php" autocomplete="off">
				
<div class="form-group">
					<label for="nro_orden" class="col-sm-2 control-label">nro_orden</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nro_orden" name="nro_orden" placeholder="nro_orden" required>
					</div>
				</div>

				<div class="form-group">
					<label for="ruc" class="col-sm-2 control-label">ruc</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ruc" name="ruc" placeholder="ruc" required>
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label for="razonsocial" class="col-sm-2 control-label">razon social</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="razon_social" required>
					</div>
				</div>
				<div class="form-group">
					<label for="mon" class="col-sm-2 control-label">monto total</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="monto_total" name="monto_total" placeholder="monto total" required>
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