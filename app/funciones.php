<?php 
	require_once ('conexion.php');

	
	function leerAreas(){
		$cnx = new Conexion();

		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $cnx->exec("SET CHARACTER SET utf8"); 

		$sql  = "SELECT id, nombre from areas";

		$r = $cnx->prepare($sql);
	  
		$r->execute();

		$areas =NULL;
		while ( $registro = $r->fetch(PDO::FETCH_ASSOC)) {
			//echo "Nombre rol: ".$registro['id']."-".$registro['nombre']."<br>";

			$areas[]= $registro;
		}

		$r->closeCursor();

		return $areas;
	}


	function leerRoles(){
		$cnx = new Conexion();

		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $cnx->exec("SET CHARACTER SET utf8"); 

		$sql  = "SELECT id, nombre from roles";

		$r = $cnx->prepare($sql);
	  
		$r->execute();

		$roles =NULL;

		while ( $registro = $r->fetch(PDO::FETCH_ASSOC)) {
			// echo "Nombre rol: ".$registro['id']."-".$registro['nombre']."<br>";

			$roles[]= $registro;
		}

		$r->closeCursor();

		return $roles;
	}
 ?>