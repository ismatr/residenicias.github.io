<?php


if(isset($_POST)){
	require_once "../../sistema/conexion.php";
    
        if(!isset($_SESSION)){
		session_start();
	}
         
	$puesto = isset($_POST['puesto'])? mysqli_real_escape_string($db, $_POST['puesto']) : false;
        $nombre_completo= isset($_POST['Pernom'])? mysqli_real_escape_string($db, $_POST['Pernom']) : false;
        $sap= isset($_POST['sap'])? mysqli_real_escape_string($db, $_POST['sap']) : false;
		$ubicacion= isset($_POST['ubicacion'])? mysqli_real_escape_string($db, $_POST['ubicacion']) : false;
		$jefe_inmediato= isset($_POST['jefei'])? mysqli_real_escape_string($db, $_POST['jefei']) : false;
        
		
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO personal VALUES('$puesto', '$nombre_completo','$sap','$ubicacion','$jefe_inmediato');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=personal&a=FormAgregar");
	
	}else{
            
	}
	
}
