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
	
	$sql = "SELECT * FROM seguridad $where";
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
												<th>Siempre detiene las actividades cuando se encuentran condiciones,comportamientos inseguros, los informa

</th>
												<th>Conoce y aplica los procedimientos y permisos de trabajo de alto riesgo requeridos (trabajos en altura, espacios confinados, peligros eléctricos, explosiones, equipos de elevación) aplicables a su función. Conoce el rol que uno tiene frente a trabajos de alto riesgo.

</th>
												<th>Conoce los riesgos asociados al almacenamiento y manipulación de sustancias químicas.

</th>
												<th>Conoce y aplica los procedimientos SAM y LOTO y puede dar ejemplos de sus riesgos relacionados.

</th>
												<th>Conoce los requisitos legales aplicables en su proceso.

</th>
												<th>Ejecuta verificaciones de monitoreo de seguridad en su estación y revisa los peligros de seguridad aplicables (Mapa de riesgos, Eq. De seguridad crítica, Señalización e información de seguridad (MSDS))

</th>
												<th>Mantiene las estaciones departamentales designadas de PPE y LOTOTO según sea necesario

</th>
												<th>Utiliza el EPP adecuado para cada tarea ejecutada (operación, mantenimiento, limpieza, etc) y para cada área ingresada.

</th>
												<th>Reporta activamente condiciones inseguras y actúa de acuerdo con las métricas de la operación.

</th>
												<th>Garantiza que el equipo sea seguro para operar al inicio, durante y al final del turno.

</th>
												<th>Conoce la matriz de peligros, riesgos y controles operativos en su puesto de trabajo.

</th>
												<th>Comprende sobre controles operativos y protocolos de respuesta a emergencias.

</th>
												<th>Manejo evidente y adecuado de cargas, posturas y conoce los peligros relacionados con la ergonomía de su trabajo.

</th>
												<th>Entiende la Política de Seguridad y cómo se aplica en su trabajo.

</th>
												<th>Comunica claramente los problemas de seguridad durante los cambios de turno

</th>
												<th>Entiende completamente la prevención de SIF, sigue las reglas de oro

</th>
												<th>Conoce los indicadores de Seguridad y su estado en su proceso asignado (LTI, MDI, MTI, FAI).

</th>
												<th>Influye (corrige o reconoce) a otros (miembros del equipo o contratistas) sobre el cumplimiento de los requisitos de seguridad y el comportamiento seguro

</th>
												<th>Proporciona inducciones de seguridad relacionadas con su estación de trabajo.

</th>
												<th>Identifica brechas en las habilidades de seguridad propias / ajenas y toma acciones para ayudar a cerrarlas

</th>
												<th>Reacciona a una condición o comportamiento inseguro

</th>
												<th>Verifica los permisos de trabajo y el cumplimiento antes de cualquier trabajo en su área, firma después del trabajo realizado

</th>
												<th>Participa de 5 Porques's relacionados con Safety PIs en su estación

</th>
												<th>Revisa y actualiza periódicamente Evaluación de Riesgos, POE, mapa de riesgos de su área.

</th>
												<th>Ejecuta una evaluación de riesgos SAFE formal para todas las tareas no rutinarias (las que no se describen en los SOP)

</th>
												<th>Revisa y comunica alertas de seguridad con el equipo

</th>
												<th>Contribuye a las actividades de promoción de la seguridad (¡La seguridad es lo primero !, Día mundial de la seguridad, etc.)

</th>
												<th>Crea OT relacionados con la seguridad en SAP (u otro) y los sigue hasta su finalización

</th>
												<th>Da retroalimentación positiva a los miembros del equipo cuando contribuyen a la cultura de seguridad o cuando se observan comportamientos seguros

</th>
												<th>Capaz de encontrar brechas y mejorar los procedimientos SAM / LOTOTO, SOP, OPL existentes

</th>
												<th>Entiende y es capaz de encontrar órdenes de trabajo de seguridad que existen en el área y realiza un seguimiento del cronograma de ejecución.

</th>
											<th>Sirve como entrenador de seguridad para la línea / turno

</th>
											<th>Calificado y autorizado para otorgar permisos de trabajo para el área, y actúa como supervisor permanente para tareas definidas de alto riesgo

</th>
											<th>Participa en procesos formales de Evaluación de Riesgos, Riesgos Laborales y MOC del departamento.

</th>
											<th>Participa en el análisis de causa raíz de accidentes / incidentes / observaciones de seguridad más allá de su estación

</th>
											<th>Crea OT relacionados con la seguridad en SAP (u otro) y los sigue hasta su finalización

</th>
											<th>Propone mejoras para reducir los riesgos de seguridad más allá de su puesto de trabajo

</th>
											<th>Asume y da seguimiento a las acciones de las alertas de seguridad

</th>
											<th>Definir PI de seguridad para su área.

</th>
											<th>Participa activamente en las reuniones de seguridad del departamento, proporciona información para las reuniones del comité de seguridad

</th>
											<th>En conjunto con el equipo, define la matriz de EPP

</th>
											<th>Ejecuta OWD mensuales en procedimientos SAM / LOTOTO para mejorarlos

</th>
											<th>Ha sido certificado para autorizar permisos de trabajo después de la revisión y calificación de la tarea / trabajo / área de trabajo.

</th>
											<th>El operador es el líder técnico de un programa de seguridad (NH3 PSM / SSM / Workplace Transport / PRV / etc.). Demuestra experiencia en sistemas de procesos participando en el alcance del trabajo, la gestión de contratistas, la identificación de peligros, la gestión de cambios, garantiza la finalización de las inspecciones de integridad mecánica y el trabajo de mantenimiento, y gestiona el reemplazo de PRV.

</th>
											



											</tr>
										</thead>
										
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
													
												
<td><?php echo $row['nombre_completo']; ?></td>
													<td><?php echo $row['rseg1']; ?></td>
													<td><?php echo $row['rseg2']; ?></td>
													<td><?php echo $row['rseg3']; ?></td>
													<td><?php echo $row['rseg4']; ?></td>
													<td><?php echo $row['rseg5']; ?></td>
													<td><?php echo $row['rseg6']; ?></td>
													<td><?php echo $row['rseg7']; ?></td>
													<td><?php echo $row['rseg8']; ?></td>
													<td><?php echo $row['rseg9']; ?></td>
													<td><?php echo $row['rseg10']; ?></td>
													<td><?php echo $row['rseg11']; ?></td>
													<td><?php echo $row['rseg12']; ?></td>
													<td><?php echo $row['rseg13']; ?></td>
													<td><?php echo $row['rseg14']; ?></td>
													<td><?php echo $row['rseg15']; ?></td>
													<td><?php echo $row['rseg16']; ?></td>
													<td><?php echo $row['rseg17']; ?></td>
													<td><?php echo $row['rseg18']; ?></td>
													<td><?php echo $row['rseg19']; ?></td>
													<td><?php echo $row['rseg20']; ?></td>
													<td><?php echo $row['rseg21']; ?></td>
													<td><?php echo $row['rseg22']; ?></td>
													<td><?php echo $row['rseg23']; ?></td>
													<td><?php echo $row['rseg24']; ?></td>
													<td><?php echo $row['rseg25']; ?></td>
													<td><?php echo $row['rseg26']; ?></td>
													<td><?php echo $row['rseg27']; ?></td>
													<td><?php echo $row['rseg28']; ?></td>
													<td><?php echo $row['rseg29']; ?></td>
													<td><?php echo $row['rseg30']; ?></td>
													<td><?php echo $row['rseg31']; ?></td>
													<td><?php echo $row['rseg32']; ?></td>
													<td><?php echo $row['rseg33']; ?></td>
													<td><?php echo $row['rseg34']; ?></td>
													<td><?php echo $row['rseg35']; ?></td>
													<td><?php echo $row['rseg36']; ?></td>
													<td><?php echo $row['rseg37']; ?></td>
													<td><?php echo $row['rseg38']; ?></td>
													<td><?php echo $row['rseg39']; ?></td>
													<td><?php echo $row['rseg40']; ?></td>
													<td><?php echo $row['rseg41']; ?></td>
													<td><?php echo $row['rseg42']; ?></td>
													<td><?php echo $row['rseg43']; ?></td>
													<td><?php echo $row['rseg44']; ?></td>





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