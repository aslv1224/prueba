<?php 
require 'empleado.php';

$id = $_GET['id'];


 $empleado = new Empleado();
 $res = $empleado->eliminar($id);
 if($res==1){
 	header('Location: ..\lista_empleados.php?del=true');
 	
 }else{
 	echo json_encode("No llegaron los datos");
 }
 


 ?>