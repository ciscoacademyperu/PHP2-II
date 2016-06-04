<?php 
#include('../constantes.php');


/**
* Clase  Conexion
*/
class Conexion extends mysqli
{
	
	public function __construct()
	{  

		parent::__construct(SERVERBD,USERBD,PASSBD,BD);
		$this->query("SET NAMES 'utf8'");
		$this->connect_errno ? die('Error con la conexion') : $x = 'Conexion ok';
		//echo $x;
		unset($x);
	}
    

 

 }



 //$db  =  new Conexion();



 ?>