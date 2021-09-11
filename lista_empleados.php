<?php 
	require 'app\funciones.php';

	$empleados = listarEmpleados();
	
	//print_r($empleados)
	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de empleados</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<section class="container">
		<h1>Lista de empleados</h1>
		<div class="col-md-10">
			<table class="table table-striped">
				<thead>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Sexo</th>
					<th>Area</th>
					<th>boletin</th>
					<th>Modificar</th>
					<th>Eliminar</th>
			  </thead>
				<tbody>
					
					<?php 
						foreach ($empleados as $empleado) {
							echo "<tr>
										<td>".$empleado['empleado']."</td>
										<td>".$empleado['email']."</td>
										<td>".$empleado['sexo']."</td>
										<td>".$empleado['area']."</td>
										<td>".$empleado['boletin']."</td>
										<td>ditar</td>
										<td>eliminar</td>
								 </tr>";
						}
					 ?>
				</tbody>
			</table>
		</div>
		
	</section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	
<script type="text/javascript">
	
</script>

</html>

