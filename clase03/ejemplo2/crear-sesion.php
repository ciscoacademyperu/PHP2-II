<?php 
session_start();

$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['apellido']=$_POST['apellido'];



header('Location: ver-sesion.php');


 ?>