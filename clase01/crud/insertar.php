<?php 

include('../bd/conexion.php');

$db     =  new Conexion();

$query  = "INSERT INTO alumno
          (nombres,apellidos,edad)
          VALUES('ERICK','NAVARRO',26)";

$result = $db->query($query);

if (!$result)
 {
	echo "No se pudo insertar lo datos";
 }
 else
 {
 	echo "Datos insertados correctamente";
 }








 ?>