<?php

//session_start();
//ob_start();
require 'conexion.php';

$where= "";
$sql = "SELECT * FROM inventario";
$resultado= $mysqli->query($sql);

//if(isset($_SESSION['usuario'])) {



?>

<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

	</head>



	<body>
		<div class="continer">
			<div class="row">
				<h2 style="text-align:center">leer</h2>

			</div>
			<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID INVENTARIO</th>
						<th>CODIGO UNICO</th>
						<th>BIENES</th>
						<th>UBICACION</th>
						<th>FECHA INGRESO</th>
						<th>RESPONSABLE</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
					while($row = $resultado->fetch_array(MYSQL_ASSOC)){
					?>
					<tr>
						<td><?php echo $row['id_inventario']; ?></td>
						<td><?php echo $row['codigo_unico']; ?></td>
						<td><?php echo $row['id_bienes']; ?></td>
						<td><?php echo $row['ubicacion']; ?></td>
						<td><?php echo $row['fecha_ingreso']; ?></td>
						<td><?php echo $row['id_responsable']; ?></td>
						
					</tr>
					<?php }?>
				</tbody>
			</table>
			</div>
              
            <div class="row">
					<a href="salir.php" class="btn btn-primary">  salir  </a>
			</div>
		</div>
	</body>
	</html>
	<?php
    // }else{
	//echo '<script> window.location="index.html"; </script>';
//}
?>