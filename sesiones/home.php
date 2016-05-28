<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>

<?php session_start(); ?>

<h1>Bienvenido(@): <?php echo $_SESSION['nombres']; ?></h1>

</body>
</html>