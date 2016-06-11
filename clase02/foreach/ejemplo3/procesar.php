<?php 

if (empty($_POST['codigo'])) {
	
header('Location: index.php?m=error');

}


include('../../constantes.php');
include('../../bd/conexion.php');

$db = new Conexion();

$arraycodigo = $_POST['codigo'];


foreach ($arraycodigo as $key => $value)
 {
	

$query   = "UPDATE alumno SET edad=edad+10 WHERE 
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