<?php

//session_start();
//ob_start();
require '../conexion.php';



$where= "";
$sql = "SELECT * FROM proveedor";
$resultado= $mysqli->query($sql);

$wheres= "";
$sqle = "SELECT * FROM inventario";
$resultado1= $mysqli->query($sqle);
$wheres= "";
$sqlei = "SELECT * FROM bienes";
$resultado2= $mysqli->query($sqlei);

//if(isset($_SESSION['usuario'])) {



?>

<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

	</head>



	<body>
		<div class="continer">
			<div class="row">
				<h2 style="text-align:center">leer,crear,modificar</h2>

			</div>
              
            <div class="row">
            	<a href="nuevosss.php" class="btn btn-default">nuevo proveedor</a>
            	<a href="nuevos3.php" class="btn btn-default">nuevo inventario</a>
            	<a href="nuevossss.php" class="btn btn-default">nuevo bienes</a>
					<a href="salir.php" class="btn btn-primary">  salir  </a>
			</div>
			<br>
			<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID BIENES</th>
						<th>DESCRIPCION</th>
						<th>TIPO</th>
						<th></th>
						<th></th>
						<th></th>
						

					</tr>
				 </thead>


				<tbody>

					<?php 
					while($rowse = $resultado2->fetch_array(MYSQL_ASSOC)){
					?>
					<tr>
						<td><?php echo $rowse['id_bienes']; ?></td>
						<td><?php echo $rowse['descripcion']; ?></td>
						<td><?php echo $rowse['tipo']; ?></td>
						<th><a href="modificar1.php?id_bienes=<?php echo $row 
						['id_bienes']; ?>"><span class="glyphicon 
						glyphicon-pencil"></span></th>
						
					</tr>
					<?php }?>
				</tbody>
				


				<thead>
					<tr>
						<th>PROVEEDOR</th>
						<th>ORDEN #</th>
						<th>RUC</th>
						<th>RAZON SOCIAL</th>
						<th>FECHA ORDEN</th>
						<th>MONTO TOTAL</th>
						<th>FECHA ENTREGA</th>
						

					</tr>
				</thead>
				<tbody>
					<?php 
					while($row = $resultado->fetch_array(MYSQL_ASSOC)){
					?>
					<tr>
						<td><?php echo $row['id_proveedor']; ?></td>
						<td><?php echo $row['nro_orden']; ?></td>
						<td><?php echo $row['ruc']; ?></td>
						<td><?php echo $row['razon_social']; ?></td>
						<td><?php echo $row['fecha_orden']; ?></td>
						<td><?php echo $row['monto_total']; ?></td>
						<td><?php echo $row['fecha_entrega']; ?></td>
						<th><a href="modificar2.php?id_proveedor=<?php echo $row 
						['id_proveedor']; ?>"><span class="glyphicon 
						glyphicon-pencil"></span></th>
						

					
					</tr>
					<?php }?>
				</tbody>
				

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
					while($rows = $resultado1->fetch_array(MYSQL_ASSOC)){
					?>
					<tr>
						<td><?php echo $rows['id_inventario']; ?></td>
						<td><?php echo $rows['codigo_unico']; ?></td>
						<td><?php echo $rows['id_bienes']; ?></td>
						<td><?php echo $rows['ubicacion']; ?></td>
						<td><?php echo $rows['fecha_ingreso']; ?></td>
						<td><?php echo $rows['id_responsable']; ?></td>
						<th><a href="modificar3.php?id_inventario=<?php echo $row 
						['id_inventario']; ?>"><span class="glyphicon 
						glyphicon-pencil"></span></th>
					</tr>
					<?php }?>
			</table>
			</div>
		</div>
		
	</body>
	</html>
<?php
     //}else{
	//echo '<script> window.location="index.html"; </script>';
//}
?>