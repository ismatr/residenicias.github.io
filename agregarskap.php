<?php
	
	session_start();
	
	if(!isset($_SESSION['id'])){
		header("Location: index.php");
	}
	
	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];
	
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema Web</title>
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
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
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
     
<main class="app-content">
<div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
               	
              <form class="form-horizontal" method="POST" action="vista/cursos/guardar-curso.php">
                
              <div class="form-group row">
                  <label class="control-label col-md-3">Nombre del curso</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nomcur" value="<?=$Cur->getnombre_cursos()?>" placeholder="">
                  </div>
                </div>
              
              
              
              
              
              
              <div class="form-group row">
                  <label class="control-label col-md-3">Sap</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="sap" value="<?=$Cur->getsap()?>" placeholder="">
                  </div>
                </div>
  

                 <div class="form-group row">
                  <label class="control-label col-md-3">Nombre Completo</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nomcom" value="<?=$Cur->getnombre_completo()?>" placeholder="">
                  </div>
                </div>


            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle">
                  </button>
                </div>
              </div>
            </div>
            </form>
          </div>
</div>

</main>  
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>

       

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
	</body>
</html>



    