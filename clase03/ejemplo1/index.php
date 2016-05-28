<?php 

#apertura la sesión
#ambito de sesión

#inicio de sesion
session_start();

#nuestra variable
$nombre="Maria Torres";

#creacion de la variable sesion 
#y asignacion de valor
$_SESSION['nombre']= $nombre;

#impresion de la variable session
#echo $_SESSION['nombre'];
#No es necesario  imprimir la variable
#de sesion  para asignar la valor.










 ?>