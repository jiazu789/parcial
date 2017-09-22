<?php

$mysqli = new mysqli('localhost','root','','daewi');
if($mysqli->connect_error){
	die('error de con'.$mysqli->connect_error);
}

printf("servidor: info: %s\n", $mysqli->server_info);
 
?>