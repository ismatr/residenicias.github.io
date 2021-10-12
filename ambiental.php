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
	
	$sql = "SELECT * FROM ambiental $where";
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
												<th>Comprende el propósito de la gestión de residuos y subproductos (generación, separación en origen, almacenamiento, uso, transporte, tratamiento y disposición final).

</th>
												<th>Identifica los peligros (aspectos ambientales) y riesgos (para) el medio ambiente, incluidas las emergencias ambientales (incendio, explosión, derrame, inundación, fugas, etc.) y sabe qué hacer en caso de una desviación.

</th>
												<th>Conoce el desempeño del proceso en relación a los indicadores de sostenibilidad (Consumo de Agua, Energía, Consumo de CO2, etc).

</th>
												<th>Realiza controles de Monitoreo Ambiental en su estación

</th>
												<th>Identifica los peligros químicos y realiza inventarios para su estación

</th>
												<th>Monitorea y mantiene actualizado el SLA de descargas dentro de su estación y BTS

</th>
												<th>Comprende cómo el BTS podría verse afectado por descargas inadecuadas para drenar

</th>
												<th>Comprende todos los puntos de las emisiones atmosféricas generadas por su área

</th>
												<th>Entiende la Política de Medio Ambiente y cómo se aplica en su trabajo.

</th>
												<th>Comprende los objetivos de sostenibilidad de ABI para 2025 y cómo los PI bajo su control pueden contribuir

</th>
												<th>Comunica claramente los problemas ambientales durante los cambios de turno

</th>
												<th>Monitorea los PI ambientales en su estación de trabajo, ejecuta planes de reacción y / o acciones correctivas inmediatas

</th>
												<th>Supervisa a los contratistas en busca de incumplimientos de Env, intensifica los problemas cuando aparecen

</th>
												<th>Ejecuta y actualiza la matriz de compatibilidad de productos químicos para su estación

</th>
												<th>Propone mejoras a los controles de gestión de descarga y / o emisiones atmosféricas de BTS

</th>
												<th>Revisa y comunica Alertas Ambientales con el equipo

</th>
												<th>Da retroalimentación positiva a los miembros del equipo cuando las contribuciones a la promoción ambiental

</th>
												<th>Comprende los desencadenantes de la resolución de problemas ambientales y participa de las 5 Porques relacionadas con los PI ambientales en su estación.

</th>
<th>Incluye aspectos medioambientales en las actividades de marcado y limpieza profunda de ATO

</th>
<th>Propone mejoras a la gestión de peligros químicos

</th>
<th>Propone mejoras para reducir la generación de residuos y / o recuperación de coproductos

</th>
<th>Participa en revisiones periódicas de análisis de Impactos y Aspectos Ambientales y Env. Procesos MOC

</th>
<th>Revisa y comunica las acciones del Comité de Env con el equipo, incluidas las acciones hacia los objetivos de sostenibilidad.

</th>
<th>Sirve como entrenador ambiental para la línea / turno

</th>
<th>Contribuye a la reducción de Env. riesgo y eliminación de Env. incumplimientos en su estación de trabajo al informar problemas, ayudar a encontrar soluciones y tomar acciones específicas

</th>
<th>Comprende la eficiencia de E&F del área / equipo / proceso y cómo medir / calcular esas eficiencias

</th>
<th>Comprende y trabaja para mejorar el impacto del equipo / área / departamento en los KPI de E&F y coordina la modulación con otros departamentos para impulsar la eficiencia

</th>
<th>Comprende en detalle cómo los procesos de elaboración / envasado impactan en los KPI de E&F y pueden ayudar a solucionar problemas de uso elevado de productos básicos (solo servicios públicos)

</th>
											</tr>
										</thead>
										
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>

													<td><?php echo $row['nombre_completo']; ?></td>
													<td><?php echo $row['ramb1']; ?></td>
													<td><?php echo $row['ramb2']; ?></td>
													<td><?php echo $row['ramb3']; ?></td>
													<td><?php echo $row['ramb4']; ?></td>
													<td><?php echo $row['ramb5']; ?></td>
													<td><?php echo $row['ramb6']; ?></td>
													<td><?php echo $row['ramb7']; ?></td>
													<td><?php echo $row['ramb8']; ?></td>
													<td><?php echo $row['ramb9']; ?></td>
													<td><?php echo $row['ramb10']; ?></td>
													<td><?php echo $row['ramb11']; ?></td>
													<td><?php echo $row['ramb12']; ?></td>
													<td><?php echo $row['ramb13']; ?></td>
													<td><?php echo $row['ramb14']; ?></td>
													<td><?php echo $row['ramb15']; ?></td>
													<td><?php echo $row['ramb16']; ?></td>
													<td><?php echo $row['ramb17']; ?></td>
													<td><?php echo $row['ramb18']; ?></td>
													<td><?php echo $row['ramb19']; ?></td>
													<td><?php echo $row['ramb20']; ?></td>
													<td><?php echo $row['ramb21']; ?></td>
													<td><?php echo $row['ramb22']; ?></td>
													<td><?php echo $row['ramb23']; ?></td>
													<td><?php echo $row['ramb24']; ?></td>
													<td><?php echo $row['ramb25']; ?></td>
													<td><?php echo $row['ramb26']; ?></td>
													<td><?php echo $row['ramb27']; ?></td>
													<td><?php echo $row['ramb28']; ?></td>
												
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