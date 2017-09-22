<?php

//session_start();
//ob_start();
require 'conexion.php';



$where= "";
$sql = "SELECT * FROM usuarios";
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
				<h2 style="text-align:center">leer,modificar,eliminar,crear</h2>

			</div>
              
            <div class="row">
            	<a href="nuevo.php" class="btn btn-default">nuevo</a>
					<a href="salir.php" class="btn btn-primary">  salir  </a>
			</div>
			<br>
			<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Usuario</th>
						<th>Rol</th>
						<th></th>
						<th></th>

					</tr>
				</thead>
				<tbody>
					<?php 
					while($row = $resultado->fetch_array(MYSQL_ASSOC)){
					?>
					<tr>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['usuario']; ?></td>
						<td><?php echo $row['tipo_usuario']; ?></td>
						<th><a href="modificar.php?cod_usu=<?php echo $row 
						['cod_usu']; ?>"><span class="glyphicon 
						glyphicon-pencil"></span></th>
						

						<th><a href="#" data-href="eliminar.php?cod_usu=<?php echo $row 
						['cod_usu'];?>" data-toggle="modal" data-target="#confirm-delete">
						<span class="glyphicon glyphicon-trash"></span></th>
					</tr>
					<?php }?>
				</tbody>
			</table>
			</div>
		</div>
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>
	</body>
	</html>
<?php
     //}else{
	//echo '<script> window.location="index.html"; </script>';
//}
?>