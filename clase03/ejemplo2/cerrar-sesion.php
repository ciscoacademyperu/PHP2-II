<?php 

session_start();#crear el ambito de sesion

#session_destroy();#destruye todas las variables de sesion.

#session_unset();


unset($_SESSION['nombre']);

header('Location: index.php'); #ir al formulario



 ?>