<?php include('../../constantes.php'); ?>
<?php include('../../bd/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta</title>
</head>
<body>

<form action="procesar.php" method="POST">
	
<button>Enviar Información</button>

<?php include('consulta.php'); ?>	


</form>

</body>
</html>