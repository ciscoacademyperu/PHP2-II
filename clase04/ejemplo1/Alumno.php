<?php 

class  Alumno{

protected    $codigo    ="001";
protected $nombres   ="Juan";
private   $apellidos ="Torres";
public   $edad =10;

public function operacion($valor,$tipo)
{
	if ($tipo=='suma')
	 {
	   echo $this->edad+$valor ;
	}
	else
	if ($tipo=='resta')
	 {
	   echo $this->edad-$valor ;
	}
}

public function mensaje_privado()
{
	$this->mensaje_protegido();
}


}







 ?>