<?php
include('configuracion.php');
include('sesion.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
</head>
<body>

Bienvenido: <?php echo $_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS]; ?>
	
<br>	
<a href="/<?php echo PATH ?>/salir.php">Cerrar Sesión</a>
</body>
</html>