

<?php
session_start();

if (!isset($_SESSION['codigo']))
 {
   	header('Location: index.php');

 }

 else
 {

 	echo $_SESSION['nombres'];
 }

 ?>
