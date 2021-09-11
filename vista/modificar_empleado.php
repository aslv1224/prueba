<?php 
	require 'app/empleado.php';

	$id = $_GET['id'];
	if($id==''){
		header('Location: http:localhost/prueba/');
	}else{

		$empleado= new Empleado($id);
		
	//print_r($roles);
	//print_r($areas);

	}
	

	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nuevo Empleado</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<section class="container">
		<h1>Crear empleado</h1>
		<div class="alert alert-primary" >
  			Los campos con * son obligatorios
		</div>
		<div class="formulario">
			<form id="empleado" class="empleado" method="post">

			 <div class="form-group row">
			    <label for="inputNombre" class="col-sm-2 col-form-label"><b>Nombre *</b></label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre completo"  name="nombre">
			    </div>
			  </div>		
			  <br>
			  <div class="form-group row">
			    <label for="inputEmail" class="col-sm-2 col-form-label"><b>Email*</b></label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail" placeholder="Email"  name="email">
			    </div>
			  </div>
			  <br>
			  <fieldset class="form-group">
			    <div class="row">
			      <legend class="col-form-label col-sm-2 pt-0"><b>Sexo*</b></legend>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="m" >
			          <label class="form-check-label" for="gridRadios1">
			            Masculino
			          </label>
			        </div>
			        <div class="form-check">
			          <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="f">
			          <label class="form-check-label" for="gridRadios2">
			            Femenino
			          </label>
			        </div>
			        
			      </div>
			    </div>
			  </fieldset>
			  <br>
			  <div class="form-group row">
			  	
			  		<label class="col-sm-2" for="area"><b>Area*</b></label>
			  	
			  	<div class="col-sm-10">
			  		<select class="form-control" id="Area">

			  		<?php 
			  			foreach ($areas as $area ) {

								echo "<option value=".$area['id'].">".$area['nombre']."</option>";
		
						}
			  		 ?>	
				      
				    </select>
			  	</div>
				    
				    
  			  </div>
  			  <br>
  			  <div class="form-group row">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
			      <div class="form-check">
			        <input class="form-check-input" type="checkbox" id="boletin" name="boletin" value="1">
			        <label class="form-check-label" for="boletin">
			          Deseo recibir boletin informativo
			        </label>
			      </div>
			    </div>
			  </div>
  			  <br>
			  <div class="form-group row">
			    <div class="col-sm-2"><b>Roles *</b></div>
			    <div class="col-sm-10">
			      <div class="form-check">

			      	<?php 
			  			foreach ($roles as $rol ) {

								
								echo "<input class='form-check-input' type='checkbox' id='rol' value='".$rol['id']."'>
								<label class='form-check-label' for='rol'>".$rol['nombre']."</label><br>"
									
								;
						}
			  		 ?>	

			      </div>
			    </div>
			  </div>
			  <div class="form-group ">
			  	<label for="desc" class="form-label col-sm-2"><b>Descripcion*</b></label>
			  	<div class="col-sm-10"><textarea class="form-control " id="desc" rows="3" required=""></textarea></div>
  				
			  </div>
			  <br>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary" id="btnCe">Crear</button>
			    </div>
			  </div>
			</form>
		</div>
	</section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>


<script>
	$(document).ready(function(){

	var formulario = document.getElementById('empleado');
	formulario.addEventListener('submit',function(e){
		e.preventDefault();
		alert("medio click");
		var datos = new FormData(formulario);
		console.log(datos.get('nombre'))
		console.log(datos.get('nombre'))

	})	









	  $("#empleado").validate({
	    rules: {
	      nombre : {
	        required: true,
	        minlength: 6
	      },
	      
	      email: {
	        required: true,
	        email: true
	      }
	      
	    },
	    messages : {
	      nombre: {
	        minlength: "minimo 6 letras"
	      },
	     
	      email: {
	        email: "formato del email: abc@domain.com"
	      },
	      
	    }
	  });
	});
</script>


</html>

