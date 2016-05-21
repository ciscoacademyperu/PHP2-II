<?php 

include('../bd/conexion.php');
$db     =  new Conexion();
$query  = "SELECT * FROM alumno";
$result = $db->query($query);
 ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<table class="table table-bordered table-condensed" >

<thead>
<tr class="info">
<th>Codigo</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Edad</th>
</tr>
</thead> 	

<tbody>

<?php 
while ($fila  =  mysqli_fetch_object($result))
 {

	echo"
	<tr>
	<td>$fila->codigo</td>
	<td>$fila->nombres</td>
	<td>$fila->apellidos</td>
	<td>$fila->edad</td>

	</tr>";
 }


 ?>


</tbody>



 </table>

