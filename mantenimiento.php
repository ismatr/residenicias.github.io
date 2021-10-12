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
	
	$sql = "SELECT * FROM mantenimiento $where";
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
												<th>Comprende cómo seleccionar una máquina de implementación ATO

</th>
												<th>Puede realizar una limpieza profunda y etiquetar

</th>
												<th>Puede completar e interpretar el tablero de actividades ATO

</th>
												<th>Puede interpretar el cronograma de mantenimiento semanal y gestionar su trabajo para cumplir con el cronograma

</th>
												<th>Entiende cómo sus acciones afectan los costos de mantenimiento y actúa para controlar los costos de mantenimiento

</th>
												<th>Utiliza correctamente el sistema ERP / CMMS para obtener / devolver repuestos de la tienda de repuestos

</th>
												<th>Utilizó correctamente el sistema CMMS para su trabajo rutinario

</th>
												<th>Identifica y gestiona correctamente equipos y piezas reparables

</th>
												<th>Aplica el proceso de garantía del sitio

</th>
												<th>Puede operar correctamente y con seguridad el equipo de mecanizado en el taller (torno, fresadora, taladro de pedestal, etc.)

</th>
												<th>Limpieza: conoce, revisa y controla los procedimientos y riesgos en las tareas de limpieza y saneamiento, incluida la operación de los sistemas CIP y los ejercicios de limpieza profunda. Utiliza y promueve el uso de elementos de seguridad teniendo en cuenta el riesgo al que se expone en las tareas realizadas, e identifica anomalías encontradas en ejercicios de limpieza profunda mediante etiquetas o avisos de mantenimiento.

</th>
												<th>Lubricar

</th>
												<th>Inspeccionar e informar

</th>
												<th>Quick Fix

</th>
												<th>Puede trabajar con el equipo para desarrollar un CIL para la máquina.

</th>
												<th>Proporcionar información técnica al planificador de mantenimiento para el desarrollo del plan de mantenimiento a mediano / largo plazo.

</th>
												<th>Puede explicar las partes y su función de su equipo.

</th>
												<th>Puede explicar cómo funciona cada parte (mecánica, eléctrica y automatización)

</th>
												<th>Puede interpretar los planos de montaje, planos eléctricos lineales y P & ID's de la máquina

</th>
												<th>Comprender el presupuesto de capital de mantenimiento y sostenimiento del área de proceso

</th>
												<th>Puede desarrollar un plan de mantenimiento preventivo a partir de las recomendaciones de los OEM y otros PM de mejores prácticas

</th>
												<th>Puede aplicar el proceso de optimización de PM como se define en VPO

</th>
												<th>Participa en el análisis RCM para desarrollar PM mejorados

</th>
												<th>Desarrolla SWI para trabajos de mantenimiento.

</th>
												<th>Los entrenadores cambian a los técnicos / técnicos de línea en el conocimiento del equipo y la ejecución de SWI

</th>
												<th>Puede interpretar informes de monitoreo de condición y mantenimiento predictivo y toma las acciones apropiadas a partir de los hallazgos de estos informes.

</th>
                                                <th>Proporciona administración de línea de entrada para administrar los costos de ZBB y UPP contra el presupuesto

</th>
                                                <th>Identifica e implementa oportunidades para reducir los costos de ZBB y UPP de manera sostenible y responsable

</th>
                                                <th>Realiza importantes actividades de mantenimiento no rutinarias al evaluar el trabajo, definir un plan de trabajo junto con otros expertos y ejecutar este plan de trabajo.

</th>
                                                <th>Capaz de encontrar contactos y trabajar con proveedores para apoyo técnico, repuestos, repuestos alternativos e iniciativas de mejora del rendimiento del equipo.

</th>
                                                <th>Medir e Informar

</th>
                                                <th>Ajustar

</th>
                                                <th>Reparación

</th>
                                                <th>Descartar y Reemplazar

</th>
											
											</tr>
										</thead>
										
										<tbody>
											<?php while($row = $resultado->fetch_assoc()) { ?>
												
												<tr>
												
													<td><?php echo $row['nombre_completo']; ?></td>
													<td><?php echo $row['rman1']; ?></td>
													<td><?php echo $row['rman2']; ?></td>
													<td><?php echo $row['rman3']; ?></td>
													<td><?php echo $row['rman4']; ?></td>
													<td><?php echo $row['rman5']; ?></td>
													<td><?php echo $row['rman6']; ?></td>
													<td><?php echo $row['rman7']; ?></td>
													<td><?php echo $row['rman8']; ?></td>
													<td><?php echo $row['rman9']; ?></td>
													<td><?php echo $row['rman10']; ?></td>
													<td><?php echo $row['rman11']; ?></td>
													<td><?php echo $row['rman12']; ?></td>
													<td><?php echo $row['rman13']; ?></td>
													<td><?php echo $row['rman14']; ?></td>
													<td><?php echo $row['rman15']; ?></td>
													<td><?php echo $row['rman16']; ?></td>
													<td><?php echo $row['rman17']; ?></td>
													<td><?php echo $row['rman18']; ?></td>
													<td><?php echo $row['rman19']; ?></td>
													<td><?php echo $row['rman20']; ?></td>
													<td><?php echo $row['rman21']; ?></td>
													<td><?php echo $row['rman22']; ?></td>
													<td><?php echo $row['rman23']; ?></td>
													<td><?php echo $row['rman24']; ?></td>
													<td><?php echo $row['rman25']; ?></td>
													<td><?php echo $row['rman26']; ?></td>
                                                    <td><?php echo $row['rman27']; ?></td>
													<td><?php echo $row['rman28']; ?></td>
													<td><?php echo $row['rman29']; ?></td>
													<td><?php echo $row['rman30']; ?></td>
													<td><?php echo $row['rman31']; ?></td>
													<td><?php echo $row['rman32']; ?></td>
                                                    <td><?php echo $row['rman33']; ?></td>
													<td><?php echo $row['rman34']; ?></td>
													<td><?php echo $row['rman35']; ?></td>
                                                    <td><?php echo $row['rman36']; ?></td>
													<td><?php echo $row['rman37']; ?></td>

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