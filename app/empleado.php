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

	function traerEmpl($id){
		$cnx = new Conexion();

		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $cnx->exec("SET CHARACTER SET utf8"); 

		$sql  = "SELECT id, nombre, email, sexo, area_id, boletin, descripcion FROM empleados WHERE id=?";
		$prm=array($id);
		$r = $cnx->prepare($sql);
		$r->execute($prm);
	  	
		$registro = $r->fetch(PDO::FETCH_ASSOC);

		return $registro;
	}

	function actualizar($id,$nombre,$email,$sexo,$area,$rol,$boletin,$desc){
		$cnx = new Conexion();

		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	    $cnx->exec("SET CHARACTER SET utf8"); 

		$sql  = "UPDATE empleados SET nombre =?,email=?,sexo=?,area_id=?,boletin=?,descripcion=? WHERE id=$id";
		$ar=array($nombre,$email,$sexo,$area,$boletin,$desc);

		$r = $cnx->prepare($sql);
	  
		$r->execute($ar);

		return 1;
	}

	function eliminar($id){
		$cnx = new Conexion();

		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $cnx->exec("SET CHARACTER SET utf8"); 

		$sql  = "DELETE FROM empleados WHERE id = ?";
		$prm=array($id);
		$r = $cnx->prepare($sql);
		$r->execute($prm);

		return 1;
	}

	



}






?>