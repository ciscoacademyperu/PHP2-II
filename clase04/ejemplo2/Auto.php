<?php 


class Auto {

protected $marca;
protected $modelo;
protected $color;


function __construct($marca_frm,$modelo_frm,$color_frm){

 
 $this->marca    = $marca_frm;  
 $this->modelo   = $modelo_frm;
 $this->color    = $color_frm; 

}



function Mostrar(){

   echo $this->marca.' - '.$this->modelo.' - '.$this->color;

}


}



 ?>
