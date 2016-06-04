<?php 
include('constantes.php');
session_start();

session_start(); 
if (!isset($_SESSION[KEY.'codigo']))
 {
   header('Location: /'.PATH.'/');	
 }

else
{

unset($_SESSION[KEY.'codigo']);
unset($_SESSION[KEY.'nombres']);
unset($_SESSION[KEY.'apellidos']);

header('Location: /'.PATH.'/');

}


 ?>
