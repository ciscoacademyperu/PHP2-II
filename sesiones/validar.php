
<?php 
include('constantes.php');
include('clases/Acceso.php');
include('bd/conexion.php');

$acceso=new Acceso($_POST['usuario'],$_POST['contrasena']);

$acceso ->Login();








 ?>