<?php 
$db     =    new Conexion();

$query  =  "SELECT * FROM alumno";

$result = $db->query($query);

 ?>

 	<table  border="1">
 		<thead>
 			<tr>
 			   <th><input type="checkbox" name="" id=""></th>
 				<th>Codigo</th>
 				<th>Nombres</th>
 				<th>Apellidos</th>
 				<th>Edad</th>
 			</tr>
 		</thead>
 		<tbody>
 			
     <?php 

   while ($fila = mysqli_fetch_object($result)) {
?>

<tr>
<td><input type="checkbox" name="codigo[]"
     value="<?php echo $fila->codigo; ?>"></td>
<td><?php echo $fila->codigo; ?></td>
<td><?php echo $fila->nombres; ?></td>
<td><?php echo $fila->apellidos; ?></td>
<td><?php echo $fila->edad; ?></td>
</tr>

  
  <?php         
         }

      ?>


 		</tbody>
 	</table>