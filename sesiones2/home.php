<?php
include('constantes.php');

session_start(); 
if (!isset($_SESSION[KEY.'codigo']))
 {
   header('Location: /'.PATH.'/');	
 }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
</head>
<body>

Bienvenido: <?php echo $_SESSION[KEY.'nombres'].' '.$_SESSION[KEY.'apellidos']; ?>
	
<br>	
<a href="/<?php echo PATH ?>/salir.php">Cerrar Sesión</a>
</body>
</html>