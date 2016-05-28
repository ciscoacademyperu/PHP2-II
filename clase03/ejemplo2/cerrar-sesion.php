<?php 

session_start();#crear el ambito de sesion


session_unset($_SESSION['nombre']);

header('Location: index.php'); #ir al formulario



 ?>