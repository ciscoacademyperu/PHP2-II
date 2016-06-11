<?php include('../../constantes.php'); ?>
<?php include('../../bd/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta</title>
<script src="../../../DataTables/librerias/bootstrap/js/jquery.js"></script>

<script src="../../../DataTables/librerias/DataTables/media/js/jquery.dataTables.min.js"></script>

<script src="../../../DataTables/librerias/DataTables/media/js/dataTables.bootstrap.min.js"></script>


<link rel="stylesheet" href="../../../DataTables/librerias/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" href="../../../DataTables/librerias/DataTables/media/css/dataTables.bootstrap.min.css">

<script>
	
$(document).ready(function() {
    $('#consulta').DataTable();
} );


</script>



</head>
<body>

<div class="container-fluid">
	
<div class="row">
	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<?php 
error_reporting(0);
if ($_GET['m']=='error')
echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>No selecciono registros.</strong>
</div>
';
else
{
	echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Los registros se actualizaron</strong>
</div>
';
}


 ?>




<form action="procesar.php" method="POST">
	<h1>Alumnos</h1>
	<hr>

<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Consulta de Alumnos
     
     <div class="pull-right">
     <button class="btn btn-primary btn-xs">Enviar Información</button>
     </div>
   
	</div>
	<div class="panel-body">
		<?php include('consulta.php'); ?>	
	</div>

	
</div>

</form>	
</div>
</div>
</div>

</body>
</html>