<?php 

include('../../constantes.php');
include('../../bd/conexion.php');

$db = new Conexion();

$arraycodigo = $_POST['codigo'];


foreach ($arraycodigo as $key => $value)
 {
	

$query   = "UPDATE alumno SET edad=edad+25 WHERE 
           codigo='$value'";
$result  = $db->query($query);
if (!$result) 
{
	echo "error";
}
else
{
	header('Location: index.php');
}



}


 ?>