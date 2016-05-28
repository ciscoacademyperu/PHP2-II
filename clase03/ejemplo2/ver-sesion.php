<?php 

session_start();

echo $_SESSION['nombre'].' '.$_SESSION['apellido'];


echo "</br>";

echo "<a href='index.php'>Crear otra sesion</a>";

echo "</br>";

echo "<a href='cerrar-sesion.php'>Cerrar sesion</a>";

 ?>