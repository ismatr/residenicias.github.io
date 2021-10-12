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
	
	$sql = "SELECT * FROM gestion $where";
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
												<th>Comprende conceptos básicos de gestión como la descripción del negocio y los mapas de procesos y sabe dónde encontrarlos para el área.

</th>
												<th>Entiende cuáles son los KPI's básicos de alto nivel para el área

</th>
												<th>Comprende y ejecuta los conceptos básicos de 5S y saneamiento para mantener los KPI de seguridad, calidad y desempeño en el área.

</th>
												<th>Actualiza los datos de las variables de desempeño del proceso (incluyendo gráficos SIC), registra las causas de las desviaciones, toma medidas y define un plan de acción a ejecutar (sigue los planes de reacción para volver a las condiciones normales de operación)

</th>
												<th>Comprende y ejecuta planes de reacción cuando se activan los disparadores

</th>
												<th>Comprende y ejecuta el concepto 5 Why para iniciar la resolución de problemas cuando se activan los factores desencadenantes

</th>
												<th>Comprende el concepto de lista de verificación y ejecuta todos los elementos a diario. Todos los elementos que no se pueden ejecutar en el turno se escalan y se identifican como elementos transferidos antes o SHO o antes para elementos críticos

</th>
												<th>Comprende y rastrea los PI de OWS y ejecuta planes de reacción según sea necesario

</th>
												<th>Comprende las expectativas del OWS y el uso de la sala de equipo y cómo cada una de las herramientas de la sala de equipo se relaciona con las prioridades operativas

</th>
												<th>Aplica 5S para aumentar la eficacia y eficiencia del trabajo

</th>
												<th>Identifica problemas recurrentes, y para aquellos que están más allá de su nivel de responsabilidad, escala hasta el nivel adecuado para su análisis. Conoce los roles de los grupos de interés con los que se debe interactuar durante la escalada, tratamiento, análisis, cierre y sostenibilidad de las acciones generadas.

</th>
												<th>Capaz de comprender los datos del proceso cuando se muestran y proporciona información para ayudar a definir y rastrear los principales problemas de la máquina para el OWS

</th>
												<th>Participa activamente en el análisis de la causa raíz de los problemas sistémicos del proceso utilizando informes de anomalías.

</th>
												<th>Realiza la resolución de problemas después de que se utilizan los planes de reacción para identificar la causa raíz del inicio del plan de reacción

</th>
												<th>Comprende y sigue el tiempo de actividad y los principales PI de problemas de la máquina en el OWS y ejecuta planes de reacción antes de que se activen los activadores.

</th>
												<th>Conoce las diferencias entre los principales indicadores de rendimiento y los indicadores clave de rendimiento y cómo el rendimiento de su equipo afecta cada comportamiento operativo de conducción

</th>
											
<th>Capaz de ejecutar informes y recopilar datos de nivel de proceso / PI de MES / MIS, realizar tendencias y análisis para identificar brechas de proceso / áreas de mejora

</th>
<th>Recomienda cambios en los PI de OWS para la propia estación de trabajo y otros en el área según el desempeño de los KPI del área

</th>
<th>Ejecutar análisis de causa raíz que ayuden a eliminar / mejorar los planes de reacción

</th>
<th>Aplica conceptos SMED para ejecutar las actividades de DPA más rápido con un mejor SUP / RUP

</th>
<th>Participa activamente en los procesos de Gestión de Cambio

</th>
<th>Utiliza Eureka (sistema global de intercambio de mejores / buenas prácticas) periódicamente, para encontrar ideas y compartir soluciones conocidas

</th>
<th>Participa activamente en las reuniones de PDCA, posee acciones asociadas a su estación.

</th>
											</tr>
										</thead>
										
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
													
													<td><?php echo $row['nombre_completo']; ?></td>
													<td><?php echo $row['rges1']; ?></td>
													<td><?php echo $row['rges2']; ?></td>
													<td><?php echo $row['rges3']; ?></td>
													<td><?php echo $row['rges4']; ?></td>
													<td><?php echo $row['rges5']; ?></td>
													<td><?php echo $row['rges6']; ?></td>
													<td><?php echo $row['rges7']; ?></td>
													<td><?php echo $row['rges8']; ?></td>
													<td><?php echo $row['rges9']; ?></td>
													<td><?php echo $row['rges10']; ?></td>
													<td><?php echo $row['rges11']; ?></td>
													<td><?php echo $row['rges12']; ?></td>
													<td><?php echo $row['rges13']; ?></td>
													<td><?php echo $row['rges14']; ?></td>
													<td><?php echo $row['rges15']; ?></td>
													<td><?php echo $row['rges16']; ?></td>
													<td><?php echo $row['rges17']; ?></td>
													<td><?php echo $row['rges18']; ?></td>
													<td><?php echo $row['rges19']; ?></td>
													<td><?php echo $row['rges20']; ?></td>
													<td><?php echo $row['rges21']; ?></td>
													<td><?php echo $row['rges22']; ?></td>
													<td><?php echo $row['rges23']; ?></td>
													
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