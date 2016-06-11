<?php 
include('configuracion.php');
session_start();

session_start(); 
if (!isset($_SESSION[KEY.CODIGO]))
 {
   header('Location: /'.PATH.'/');	
 }

else
{

unset($_SESSION[KEY.CODIGO]);
unset($_SESSION[KEY.NOMBRES]);
unset($_SESSION[KEY.APELLIDOS]);

header('Location: /'.PATH.'/');

}


 ?>
