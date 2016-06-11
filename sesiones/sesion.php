<?php 
session_start(); 
if (!isset($_SESSION[KEY.CODIGO]))
 {
   header('Location: /'.PATH.'/');	
 }

 ?>