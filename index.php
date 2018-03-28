<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<!--  
	@brief: Página web de inicio que contiene una seccion desple-
			gable.
	@author: Ing. Moises Morales G.
	@version: 1.0.0
	@since: 03/09/2017.
-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloSeccionDesplegable.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Para colocar un favicon en la pestaña del navegador. -->
	<link rel="icon" href="img/nov31.ico">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
	<div id="particles-js"></div>
	<!-- Sección que se oculta y se muestra -->
	<section class="seccionToggle">
		<div class="wrap">
			<h2 class="wow lightSpeedIn">Sistema de Inventarios</h2>
			<p>by</p>
			<p>Ing. Moises M. G.</p>
			<a href="bd/accesoSistema.php">
				<button>Iniciar Sesión</button>	
			</a>
		</div>
	</section>
	<a href="#" id=btn-toggle class="btn-toggle">Abrir</a>
	<!-- Sección principal de la pagina. -->
	<br><br><br>
	<div class="main">
		<div class="wrap2">
<!--			<div class="content invoice">-->
			    <br><br>
			    <div class="container_border">
				<div class="container-fluid">
					<div class="panel panel-default">
						<div class="panel-heading colocarIcono">
							<h3 class="wow zoomIn">
							    &nbsp;&nbsp;
								<i class="fa fa-laptop fa-2x"></i>
				                &nbsp;<b>Disys FEM.</b>
				            </h3>
						</div>
						<div class="panel-body color-letra ">
							<h3 align="center" class="wow zoomIn">Sistema de Inventarios</h3>
							
							<div class="row wow zoomIn">
							    <div class="col-md-4">
                                    <img src="img/logo_index1.png" alt="imagen1.png" class="img-responsive">
                                    <br>
                                    <p class="wow zoomIn justificar" data-wow-duration="3s" data-wow-delay="1s">Olvídate de las complejas y costosas implementaciones. Utiliza Disys FEM desde el primer día. No requieres experiencia previa.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="img/logo_index2.png" alt="imagen1.png" class="img-responsive">
                                    <br>
                                    <p class="wow zoomIn justificar" data-wow-duration="3s" data-wow-delay="1s">No importa el giro de tu empresa, Disys FEM te ofrece una solución para todos los procesos de tu negocio.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="img/Sin%20t%C3%ADtulo-3.png" alt="imagen1.png" class="img-responsive">
                                    <br>
                                    <p class="wow zoomIn justificar" data-wow-duration="3s" data-wow-delay="1s">La información que necesitas al momento en que la necesitas sin importar donde te encuentres.</p>
                                </div>
							</div>
							<br>
							<div class="row">
							    <div class="col-md-12 fondo_seccion2">
							        <h1 align="center">Máxima Confidencialidad en sus Datos.</h1>
							        <h5 align="center">* Protegido contra ataques de inyección de código SQL.</h5>
							        <h5 align="center">* Protegido contra ataques XSS.</h5>
							        <h5 align="center">* Protegido contra ataques XEE.</h5>
							        <h5 align="center">* Bloqueo de Ip para evitar DDOS.</h5>
							    </div>
							</div>
							
							<div class="row">
                                <br>
                                <div class="col-lg-12 tam_letra">
                                    <p class="wow zoomIn" data-wow-duration="4s" data-wow-delay="1s">
                                        Disys FEM está diseñado para mostrarte la información más importante de tus inventarios y existencias cuando Tú la necesites sin importar en donde te encuentres.
                                        <br><br>
                                        Con las herramientas disponibles en Disys FEM podrás controlar y supervisar todos los movimientos que se realicen en tus inventarios sin importar cuantos tengas o en que parte del país estén ubicados. Nuestra interface intuitiva y fácil de usar te permitirá empezar a registrar existencias y almacenes  en cuestión de minutos.
                                        <br><br>
                                        Nuestro sistema de control de inventarios en la nube te ayudará a eliminar los extravíos de artículos y mantener tus almacenes bien organizados.
                                    </p>
                                </div>
							</div>
						</div>
					</div>
				</div>
				</div>
<!--			</div>-->
		</div>
		<!-- ./wrap -->
	</div>
	<div class="footer">
        <hr>
	    <h4 align="center">Sistema solo simulado, sin fines de lucro, solo para calificación.</h4>
	    <hr>
<!--	    <br>&nbsp;-->
	</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/seccion.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/particulas.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		new WOW().init();
	});
</script>
</html>