<?php 

#creacion de Clase Alumno
class Alumno{

function mensaje(){
 
   return "Hola soy una Funcion Publica";
}


function CorrelativoAlumno()
{
	$correlativo = 2345;
	return  $correlativo;
}

}
#crear del objeto alumno de tipo Alumno

$alumno = new Alumno();


$correlativoalumno = $alumno -> CorrelativoAlumno();

echo $correlativoalumno+1;


 ?>
