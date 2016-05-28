<?php 
session_start();

if (!isset($_SESSION['codigo']))
 {
    include('acceso.php');	
 }
else

{
	
	
	include('home.php');
}


 ?>
