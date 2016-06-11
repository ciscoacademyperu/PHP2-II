<?php 
include('Alumno.php');

$alumno  = new Alumno();

#accediendo a una variable publica
echo $alumno->operacion($_GET['valor'],$_GET['tipo']);






 ?>