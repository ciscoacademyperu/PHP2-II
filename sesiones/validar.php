<?php 

include('configuracion.php');
include('bd/conexion.php');
$db = new  Conexion();

$usuario    = addslashes($_POST['usuario']);

$contrasena = addslashes($_POST['contrasena']);


$query   =  "SELECT codigo,nombres,apellidos FROM alumno 
WHERE usuario='$usuario' AND contrasena='$contrasena'";

$result  = $db->query($query);
$dato    = mysqli_fetch_array($result);

$num_fila = $result->num_rows;

if ($num_fila>0) 
{
  session_start();
  

   $_SESSION[KEY.CODIGO]    = $dato['codigo'];
   $_SESSION[KEY.NOMBRES]   = $dato['nombres'];
   $_SESSION[KEY.APELLIDOS] = $dato['apellidos'];

  header('Location: /'.PATH.'/home.php');
}
else 
{
   header('Location: /'.PATH.'/');	
} 













 ?>