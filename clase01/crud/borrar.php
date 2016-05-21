<?php 

include('../bd/conexion.php');

$db     =  new Conexion();

$query  = "DELETE FROM alumno WHERE
codigo=1";

$result = $db->query($query);

if (!$result)
 {
	echo "No se pudo borrar lo datos";
 }
 else
 {
 	echo "Datos borrados correctamente";
 }








 ?>