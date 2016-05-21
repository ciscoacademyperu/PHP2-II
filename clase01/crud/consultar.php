<?php 
/*
El archivo constantes.php debe ser llamado
en primer lugar porque contiene los valores de conexion del servidor.
 */
include('../constantes.php');
include('../bd/conexion.php');

$db     =  new Conexion();

$query  = "SELECT * FROM alumno";

$result = $db->query($query);

while ($fila = mysqli_fetch_object($result)) 
{
	
	echo $fila->codigo.' - '.$fila->nombres.' - '.$fila->apellidos.' - '.$fila->edad."</br>";
}










 ?>