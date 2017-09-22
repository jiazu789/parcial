<?php
	require 'conexion.php';
	
	$id = $_GET['cod_usu'];
	
	$sql = "SELECT * FROM usuarios  WHERE cod_usu = '".$id."'";
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
			<form action="update.php">
			<input type="text" name="nombre">
			<input type="submit">
			</form>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
	



	<div class="form-group">
					<label for="ID" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" id="cod_usu" name="cod_usu" value="<?php echo $row['cod_usu']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"  value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				
				
			<div class="form-group">
					<label for="usuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario"   value="<?php echo $row['usuario']; ?>"required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="pass" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="clave" name="password" placeholder="Clave" required value="<?php echo $row['password']; ?>">
					</div>
				</div>
				
				

				<div class="form-group">
					<label for="tipo_usuario" class="col-sm-2 control-label">permiso</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipo_usuario" name="tipo_usuario">
							<option value="LMCE" <?php if($row['tipo_usuario']=='LMCE') echo 'selected'; ?>>LMCE</option>
							<option value="LME" <?php if($row['tipo_usuario']=='LMC') echo 'selected'; ?>>LME</option>
							<option value="LM"<?php if($row['tipo_usuario']=='LM') echo 'selected'; ?>>LM</option>
							<option value="L"<?php if($row['tipo_usuario']=='L') echo 'selected'; ?>>L</option>
						</select>
					</div>
				</div>
				
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>