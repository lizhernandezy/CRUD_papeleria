<?php

$mysqli = new mysqli('localhost:3307', 'root', 'haroldibiripsY', 'pepeleriadb');

if($mysqli->connect_error){
	die('Error en la conexion' . $mysqli->connect_error);
   


}
?>