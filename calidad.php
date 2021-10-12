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
	
	$sql = "SELECT * FROM calidad $where";
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
												<th>Mantiene la máquina, la instrumentación y el área de la estación de trabajo limpia y organizada

</th>
												<th>Ejecuta todas las tareas relacionadas con la higiene según los procedimientos operativos estándar, el programa maestro de limpieza y el plan maestro de limpieza.

</th>
												<th>Entiende y aplica PTS (Especificaciones Técnicas del Producto) que incluye especificaciones, tolerancias, frecuencia mínima de muestreo, dónde recolectar la muestra, el método de análisis y cómo reaccionar a los resultados cuando están fuera de las tolerancias aceptables o esperadas.

</th>
												<th>Conoce y aplica los planes de reacción de PTS, detiene siempre el proceso cuando se requiere y cuando es necesario dejar de producir productos no conformes

</th>
												<th>Ejecuta las pruebas asignadas según lo requiera su función mientras documenta adecuadamente todos los resultados de acuerdo con la política de gestión de datos.

</th>
												<th>Conoce y aplica las prácticas y Riesgos de Seguridad Alimentaria (Buenas Prácticas de Manufactura (GMP's), higiene personal, CIP, procedimientos de limpieza y desinfección, HACCP: Químico, Biológico, Físico, Alérgeno y Radiológico) y ejecuta los criterios del programa de prerrequisitos y PCC. verificaciones según sea necesario.

</th>
												<th>Comprende los SOP relacionados con el puesto y puede explicar los pasos clave de los SOP y su impacto en la calidad del producto.

</th>
												<th>Conoce los KPI's de Calidad de su proceso y asegura la ejecución de los controles establecidos para garantizar la calidad.

</th>
												<th>Comprende y explica el impacto en la calidad por el incumplimiento de las especificaciones técnicas de las materias primas y / o materiales de empaque necesarios para su proceso.

</th>
												<th>Aplica los procedimientos de limpieza y desinfección de su proceso, asegura la ejecución del programa maestro de limpieza, mantiene el nivel de higiene requerido y comprende el impacto de la higiene en el proceso.

</th>
												<th>Conoce los resultados de las auditorías que se han realizado en su área de trabajo, así como las brechas planteadas y acciones relacionadas.

</th>
												<th>Participante activo en la revisión y finalización de listas de verificación de cumplimiento de políticas.

</th>
												<th>Puede explicar los parámetros del proceso y los datos de KPI. Comprende las brechas y oportunidades de calidad.

</th>
												<th>Define PI (s) "Cero defectos" y los rastrea frente a un objetivo en su estación de trabajo y es capaz de reaccionar adecuadamente a condiciones fuera de especificación utilizando un plan de reacción

</th>
												<th>Comunica claramente los problemas de calidad durante los cambios de turno

</th>
												<th>Verifica los materiales entrantes frente a las especificaciones, sigue los planes de reacción y / o los SOP cuando hay no conformidades

</th>
												<th>Verifica el equipo de control de calidad automatizado, valida las lecturas de los sistemas de medición automatizados

</th>
												<th>Gestiona las existencias locales de suministros de limpieza, incluidos PPE, soluciones químicas / sanitarias, herramientas de limpieza (5S'd)

</th>
												<th>Inicia el bloqueo del producto no conforme desde el último control correcto para evitar incidentes de calidad

</th>
												<th>Ejecuta actividades de limpieza de manera proactiva durante tiempos de inactividad no planificados cuando es posible

</th>
												<th>Comprende el riesgo microbiológico y realiza actividades de control microbiológico en el campo

</th>
												<th>Realiza controles de calidad que requieren equipo especial, según el requisito de PTS

</th>
												<th>Participa de 5 Porques's relacionados con Quality PIs en su estación de trabajo

</th>
												<th>Rastrear y monitorear los PI que están vinculados a los KPI de calidad y comprender el impacto en la calidad del producto terminado

</th>
												<th>Capaz de identificar diferencias en materias primas y materiales de empaque (calidad, especificación, proveedores) y hacer ajustes al proceso y equipo para mantener el desempeño y la calidad

</th>
												<th>Comprende las principales brechas de PRP / GFSI en el área y ejecuta activamente acciones para cerrar estas brechas

</th>
                                        <th>Revisar los datos relevantes y proponer mejoras a las frecuencias / métodos / planes de reacción de las inspecciones de calidad, proponer PI para establecer

</th>
										<th>Revisa CCP y otros registros de calidad para verificar el cumplimiento de los estándares de PTS y seguridad alimentaria, informa sobre no conformidades

</th>
										<th>Ejecuta OWD en pares: limpieza de SOP, verificaciones, controles de calidad, etc., ejecuta verificaciones de los resultados de las pruebas de calidad

</th>
										<th>Incluye aspectos de calidad en las actividades de marcado y limpieza profunda de ATO

</th>
										<th>Ejecuta auditorías del Programa de Prerrequisitos (PRP) y apoya la ejecución de la auditoría de Verificación de Salud de Seguridad Alimentaria

</th>
										<th>Utiliza el control estadístico de procesos para rastrear el desempeño del proceso e impulsar la mejora de la calidad

</th>
										<th>Participa activamente de los procesos MOC relacionados con la Calidad (por ejemplo, cambios de proceso, nuevos proyectos, nuevos procesos)

</th>
										<th>Actuar como una PYME de Calidad más allá del puesto OWS para ítems como higiene, control de procesos, trazabilidad, inspección de productos bloqueados

</th>
										<th>Comprende el impacto de los procesos en la cerveza sensorial y participa en el panel de sabor sensorial

</th>
										<th>Realiza auditorías PRP / GFSI y define las acciones necesarias para mejorar los puntajes de auditoría

</th>
											</tr>
										</thead>
										
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
													
													<td><?php echo $row['nombre_completo']; ?></td>
													<td><?php echo $row['rcal1']; ?></td>
													<td><?php echo $row['rcal2']; ?></td>
													<td><?php echo $row['rcal3']; ?></td>
													<td><?php echo $row['rcal4']; ?></td>
													<td><?php echo $row['rcal5']; ?></td>
													<td><?php echo $row['rcal6']; ?></td>
													<td><?php echo $row['rcal7']; ?></td>
													<td><?php echo $row['rcal8']; ?></td>
													<td><?php echo $row['rcal9']; ?></td>
													<td><?php echo $row['rcal10']; ?></td>
													<td><?php echo $row['rcal11']; ?></td>
													<td><?php echo $row['rcal12']; ?></td>
													<td><?php echo $row['rcal13']; ?></td>
													<td><?php echo $row['rcal14']; ?></td>
													<td><?php echo $row['rcal15']; ?></td>
													<td><?php echo $row['rcal16']; ?></td>
													<td><?php echo $row['rcal17']; ?></td>
													<td><?php echo $row['rcal18']; ?></td>
													<td><?php echo $row['rcal19']; ?></td>
													<td><?php echo $row['rcal20']; ?></td>
													<td><?php echo $row['rcal21']; ?></td>
													<td><?php echo $row['rcal22']; ?></td>
													<td><?php echo $row['rcal23']; ?></td>
													<td><?php echo $row['rcal24']; ?></td>
													<td><?php echo $row['rcal25']; ?></td>
													<td><?php echo $row['rcal26']; ?></td>
													<td><?php echo $row['rcal27']; ?></td>
													<td><?php echo $row['rcal28']; ?></td>
													<td><?php echo $row['rcal29']; ?></td>
													<td><?php echo $row['rcal30']; ?></td>
													<td><?php echo $row['rcal31']; ?></td>
													<td><?php echo $row['rcal32']; ?></td>
													<td><?php echo $row['rcal33']; ?></td>
													<td><?php echo $row['rcal34']; ?></td>
													<td><?php echo $row['rcal35']; ?></td>
													<td><?php echo $row['rcal36']; ?></td>
												
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