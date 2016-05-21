<?php 
include('constantes.php');
include('bd/conexion.php');


$db     =   new Conexion();

$query  = "SELECT a.nombres,a.apellidos,c.nombre_curso FROM ".BD.".alumno as a INNER JOIN
           ".BD02.".curso AS c ON a.codigo=c.alumno   WHERE a.codigo=2";
$result =$db->query($query);
$dato   = mysqli_fetch_array($result);
echo $dato['nombres'].' '.$dato['apellidos'].' '.$dato['nombre_curso'];








 ?>