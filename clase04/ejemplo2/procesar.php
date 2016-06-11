<?php 

if (empty($_POST['color'])) {
	

echo  "<script>
alert('ingresa el color');
window.location='frm-registrar.php?marca=$_POST[marca]&modelo=sentra';
      </script>";


}




include('Auto.php');

$auto  =  new Auto($_POST['marca']);

$auto -> Mostrar();




 ?>