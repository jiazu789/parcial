<?php
session_start(); 
			include 'serv.php';
			if(isset($_POST['ingresar'])){
				$usuario = $_POST['usiario'];
				$pw = $_POST['password'];
				$log = mysql_query("SELECT * FROM usuarios WHERE user='$usuario' AND password='$pw'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario']; 
				  	echo 'Iniciando sesión para '.$_SESSION['usuario'].' <p>';
					echo '<script> window.location="rol.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.html"; </script>';
				}
			}
		?>	