<?php 
//session_start(); 

$nombre=$_POST['usuario'];
$password=$_POST['password'];
$conexion=mysqli_connect("localhost","root","","daewi");
$consulta = mysqli_query($conexion,"SELECT * from usuarios where usuario='$nombre' and tipo_usuario='0' ");
$consulta2 = mysqli_query($conexion,"SELECT * from usuarios where usuario='$nombre' and tipo_usuario='1' ");
$consulta3 = mysqli_query($conexion,"SELECT * from usuarios where usuario='$nombre' and password='$password' ");
$consulta4 = mysqli_query($conexion,"SELECT * from usuarios where usuario='$nombre' and tipo_usuario='2' ");
$consulta5 = mysqli_query($conexion,"SELECT * from usuarios where usuario='$nombre' and tipo_usuario='3' ");
$roles = mysqli_fetch_array($consulta);
$roles2= mysqli_fetch_array($consulta2);
$roles3= mysqli_fetch_array($consulta4);
$roles4= mysqli_fetch_array($consulta5);

if ($roles["tipo_usuario"]=="0") {

echo"administrador";

header('Location: indexad.php');

}else if ($roles2["tipo_usuario"]=="1") {
	echo "no tiene permisos";
	header("Location: indexus1.php");
}else if($roles3["tipo_usuario"]=="2"){
	echo "no tiene permisos";
	header("Location: indexus2/indexus2.php");
}else if($roles4["tipo_usuario"]=="3"){
	echo "no tiene permisos";
	header("Location: indexus3/indexus3.php");
}

?>