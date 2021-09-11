<?php 
require 'empleado.php';

$id = $_POST['cod'];
$nombre = $_POST['nombre'];
$email =  $_POST['email'];
$sexo = $_POST['sexo'];	
$area= $_POST['area'];
$rol= $_POST['rol'];
$boletin= $_POST['boletin'];
$desc= $_POST['desc'];



//se pueden validar el resto pero no me alcanzo el tiempo
if($nombre ==='' ||  $email === ''){
  echo json_encode("Datos vacios");
}else{

if ($_POST['boletin'] === null) {
	$boletin = 0;
}	

 $empleado = new Empleado();
 $res = $empleado->actualizar($id,$nombre,$email,$sexo,$area,$rol,$boletin,$desc);
	 if($res==1){
	 	echo json_encode("Datos Actualizados con exito");
	 }else{
	 	echo json_encode("No llegaron los datos");
	 }
 
}

 ?>