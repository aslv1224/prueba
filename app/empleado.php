<?php 
 require_once ('conexion.php');

class Empleado {

	// var $nombre;
	// var $sexo;
	// var $correo;
	// var $area;
	// var $rol;
	// var $boletin;
	// var $desc;


	function crear($nombre,$email,$sexo,$area,$rol,$boletin,$desc){
		$cnx = new Conexion();

		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $cnx->exec("SET CHARACTER SET utf8"); 

		$sql  = "INSERT INTO empleados (nombre,email,sexo,area_id,boletin,descripcion) VALUES(?,?,?,?,?,?)";

		$r = $cnx->prepare($sql);
	  
		$r->execute([$nombre,$email,$sexo,$area,$boletin,$desc]);

		return 1;
	}

	function actualizar(){

	}

	function eliminar(){

	}

	



}

$nombre = $_POST['nombre'];
$email =  $_POST['email'];
$sexo = $_POST['email'];	
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
 $res = $empleado->crear($nombre,$email,$sexo,$area,$rol,$boletin,$desc);
 if($res==1){
 	echo json_encode($res);
 }else{
 	echo json_encode("No llegaron los datos");
 }
 
}




?>