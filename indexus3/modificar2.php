<?php
	require '../conexion.php';
	
	$id_proveedor = $_GET['id_proveedor'];
	
	$sql = "SELECT * FROM proveedor  WHERE id_proveedor = '".$id_proveedor."'";
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
			
			
			<form class="form-horizontal" method="POST" action="update2.php" autocomplete="off">
	



	<div class="form-group">
					<label for="id_proveedor" class="col-sm-2 control-label">id_proveedor</label>
					<div class="col-sm-10">
						<input disabled type="text" class="form-control" id="id_proveedor" name="id_proveedor" 
						value="<?php echo $row['id_proveedor']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="nro_orden" class="col-sm-2 control-label">nro_orden</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nro_orden" name="nro_orden" placeholder="nro_orden"  value="<?php echo $row['nro_orden']; ?>" required>
					</div>
				</div>
				
				
				
			<div class="form-group">
					<label for="ruc" class="col-sm-2 control-label">ruc</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ruc" name="ruc" placeholder="ruc"   value="<?php echo $row['ruc']; ?>"required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="razon_social" class="col-sm-2 control-label">razon_social</label>
					<div class="col-sm-10">
						<input type="razon_social" class="form-control" id="razon_social" name="razon_social" placeholder="razon_social"  value="<?php echo $row['razon_social']; ?>" required>
					</div>
				</div>
				
				
<div class="form-group">
					<label for="monto_total" class="col-sm-2 control-label">monto_total</label>
					<div class="col-sm-10">
						<input type="monto_total" class="form-control" id="monto_total" name="monto_total" placeholder="monto_total"  value="<?php echo $row['monto_total']; ?>" required>
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