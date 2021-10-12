<?php


if(isset($_POST)){
	require_once "../../sistema/conexion.php";
    
        if(!isset($_SESSION)){
		session_start();
	}
         
	$nombre_cursos = isset($_POST['nomcur'])? mysqli_real_escape_string($db, $_POST['nomcur']) : false;
        $nombre_completo= isset($_POST['nomcom'])? mysqli_real_escape_string($db, $_POST['nomcom']) : false;
        $sap= isset($_POST['sap'])? mysqli_real_escape_string($db, $_POST['sap']) : false;
        
         
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO cursos VALUES('$nombre_cursos', '$nombre_completo','$sap');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=cursos&a=FormAgregar");
	
	}else{
            
	}
	
}
