<?php 

include('configuracion.php');

session_start();

if (!isset($_SESSION[KEY.CODIGO]))
 {
   include('acceso.php');	
 }

 else
 {
 	header('Location: /'.PATH.'/home.php');
 }








 ?>

