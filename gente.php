<?php
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$id = $_SESSION['id'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
	if($tipo_usuario == 1){
		$where = "";
		} else if($tipo_usuario == 2){
		$where = "WHERE id=$id";
	}
	
	$sql = "SELECT * FROM gente $where";
	$resultado = $mysqli->query($sql);
	
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Tables - SB Admin</title>
		<link href="css/styles.css" rel="stylesheet" />
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Sistema Web</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
			>
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Salir</a>
					</div>
				</li>
			</ul>
		</nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="principal.php"
							><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Menu</a
							>
							<?php if($tipo_usuario == 1) { ?>
								
								<div class="sb-sidenav-menu-heading">Administrador</div>
								
                                <a class="nav-link" href="empleados.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
								Personal</a>

                                    <a class="nav-link" href="cursos.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
								Skap</a>

                                    <a class="nav-link" href="codigoqr.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Codigo Qr</a>
                                	
							<?php } ?>
							<?php if($tipo_usuario == 2) { ?>
							<div class="sb-sidenav-menu-heading">Usuario</div>
							
                            <a class="nav-link" href="empleadosu.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Personal</a>

                                    <a class="nav-link" href="cursosu.php"
								><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
									Skap</a>
									<?php } ?>
                           
							</div>
					</div>
                   
				</nav>
			</div>
           
			<div id="layoutSidenav_content">
				<main>
					<div class="container-fluid">
						<h1 class="mt-4">Tablas</h1>
					
					
						<div class="card mb-4">
							<div class="card-header"><i class="fas fa-table mr-1"></i></div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Nombre Completo</th>
												<th>Comprende y ejecuta el plan de desarrollo según las instrucciones.

</th>
												<th>Demuestra disposición para aprender nuevas tareas operativas, de inspección limpieza y/o mantenimiento.

</th>
												<th>Propone mejoras en las asignaciones del cronograma de mano de obra de área/línea para mejorar el desempeño.

</th>
												<th>Solicita capacitación/rotación laboral para desarrollar hábilidades multiples.

</th>
												<th>Conoce y participa en la ejecución del plan de acción del compromiso.

</th>
												<th>Comprende y se compromete con la creación y ejecución de su propio plan de desarrollo.

</th>
												<th>Identifica las necesidades de capacitación de los demás, persigue aumentar las habilidades del resto del equipo para una mayor flexibilidad

</th>
												<th>Participa activamente en las actividades de participación

</th>
												<th>Propone objetivos a nivel de equipo e individual para aprovechar el ejercicio de establecimiento de objetivos

</th>
												<th>Asesora a otros que son nuevos en el rol

</th>
<th>Revisa periódicamente sus tareas e identifica oportunidades de simplificación / automatización

</th>
<th>Monitorear y ajustar el plan de Autonomía para ellos y su equipo

</th>
<th>Forma a otros: compañeros, contratistas y líderes

</th>
<th>Revisa y comunica las acciones del Comité de Personas con el equipo

</th>
<th>Evaluar la distribución de la carga de trabajo y proponer acciones para ayudar a equilibrar las cargas de trabajo de los miembros del equipo.

</th>
<th>Trabaja en planes para lograr los objetivos individuales y de equipo, alineados con los objetivos y planes de la línea / departamento / organización

</th>
<th>Participar en el ejercicio de establecimiento de objetivos de línea anual

</th>
<th>Participa en el desarrollo y ejecución del plan de acción del compromiso.

</th>
											</tr>
										</thead>
										
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
													
													<td><?php echo $row['nombre_completo']; ?></td>
													<td><?php echo $row['rgen1']; ?></td>
													<td><?php echo $row['rgen2']; ?></td>
													<td><?php echo $row['rgen3']; ?></td>
													<td><?php echo $row['rgen4']; ?></td>
													<td><?php echo $row['rgen5']; ?></td>
													<td><?php echo $row['rgen6']; ?></td>
													<td><?php echo $row['rgen7']; ?></td>
													<td><?php echo $row['rgen8']; ?></td>
													<td><?php echo $row['rgen9']; ?></td>
													<td><?php echo $row['rgen10']; ?></td>
													<td><?php echo $row['rgen11']; ?></td>
													<td><?php echo $row['rgen12']; ?></td>
													<td><?php echo $row['rgen13']; ?></td>
													<td><?php echo $row['rgen14']; ?></td>
													<td><?php echo $row['rgen15']; ?></td>
													<td><?php echo $row['rgen16']; ?></td>
													<td><?php echo $row['rgen17']; ?></td>
													<td><?php echo $row['rgen18']; ?></td>
											
												</tr>
											<?php } ?>
										</tbody>
									</table>
								
								</div>
								<a class="boton" href="seguridad.php" target="_blank">Seguridad</a>
								<a class="boton" href="calidad.php" target="_blank">Calidad</a>
								<a class="boton" href="ambiental.php" target="_blank">Ambiental</a>
								<a class="boton" href="gestion.php" target="_blank">Gestion</a>
								<a class="boton" href="gente.php" target="_blank">Gente</a>
								<a class="boton" href="mantenimiento.php" target="_blank">Mantenimiento</a>
								<a class="boton" href="logistica.php" target="_blank">Logistica</a>
								<a class="boton" href="operacion.php" target="_blank">Operacion</a>
								

							
							</div>	
							</div>
											</div>
											
					</main>	
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
		<script src="assets/demo/datatables-demo.js"></script>
	</body>
	
</html>