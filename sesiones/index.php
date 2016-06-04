<?php 

include('constantes.php');

session_start();

if (!isset($_SESSION[KEY.'codigo']))
 {
   include('acceso.php');	
 }

 else
 {
 	header('Location: /'.PATH.'/home.php');
 }








 ?>

