<?php 



#Crear un array
               #(   0    1        2    )
$nombres   = array('luis','jose','arturo');

$apellidos = array('davila','adrian','adrian');

$codigos = array('1','2','3');


#Imprimir el array

foreach ($nombres as $key => $value_nombres)
 {
	
	$value_apellidos = $apellidos[$key];
	$value_codigos = $codigos[$key];


	echo $value_codigos.' '.$value_nombres.' '.$value_apellidos."</br>";


}
	












 ?>