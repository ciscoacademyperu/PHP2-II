<?php 

class Acceso
{

protected $usuario;
protected $contrasena;


function __construct($usuario,$contrasena){

$this->usuario     = $usuario;
$this->contrasena  = $contrasena;

}


function Login()
{

$db     =   new Conexion();
$query  =  "SELECT codigo,nombres,apellidos FROM alumno WHERE
            nombres='$this->usuario' AND 
            apellidos='$this->contrasena'";
$result = $db->query($query);
$fila   = mysqli_fetch_array($result);

$numfilas = $result->num_rows;   

if ($numfilas>0)
 {
     session_start();

     $_SESSION['codigo']=$fila['codigo']; 
     $_SESSION['nombres']=$fila['nombres']; 
     $_SESSION['apellidos']=$fila['apellidos'];

     header('Location: index.php');   

 }
   else 
  {
     header('Location: index.php');
   }
            

}





}




 ?>

