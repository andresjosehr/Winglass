<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Beetle - App Showcase Basic</title>
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="style.css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">			
	</head>

	<body class="page">

		<?php
		include ("menu.php")
		?>

		<main role="main">
			<div id="intro-wrap">
				<div id="intro" class="preload" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fade">	
					<div class="intro-item" style="background-color: #00CCFF;">		
						<div class="intro-mockup-wrapper">		
							<div class="caption-mockup caption-right column six last-special">
								<h2>+ Diseño, <br>+ Calidad  <br>+ Entrega</h2>
								<p>Más que una cristalería estamos para establecer lazos de confianza a traves de un trabajo bien hecho
									<br>¿Que esperas? <a href="http://dribbble.com/rickwaalders">Ver Productos</a></p>
								<a class="button white transparent" href="contacto.php">Contactanos</a>
							</div><!-- caption -->
							<div class="intro-mockup intro-left column six">
								<img src="img/IMG_6011.jpg" alt="">
							</div><!-- intro-mockup -->							
						</div><!-- intro-mockup-wrapper -->
					</div>					
					<div class="intro-item" style="background-color: #00CCFF;">
						<div class="intro-mockup-wrapper">						
							<div class="caption-mockup">
								<h2>Ahorra tiempo. Ahorra dinero</h2>
								<p>Aprovecha tus oportunidades</p>
							</div><!-- caption -->	
							<div class="photocaption">
								
							</div><!-- photocaption -->													
							<div class="intro-mockup">
								<img src="img/IMG_11.png" alt="">
							</div><!-- intro-mockup -->	
						</div><!-- intro-mockup-wrapper -->										
					</div>
					<div class="intro-item" style="background-color: #00CCFF;">
						<div class="intro-mockup-wrapper">
							<div class="caption-mockup caption-left column six">
								<h2>Porque tu nos importas</h2>
								<p>Tomate un café y llamanos
								<br>No te arrepentiras</p>
								<a class="button white transparent" href="#">Llamar</a>
							</div><!-- caption -->												
							<div class="intro-mockup intro-right column six last">
								<img src="img/IMG_6011.jpg" alt="">
							</div><!-- intro-mockup -->	
						</div><!-- intro-mockup-wrapper -->
					</div>	
					<div class="intro-item" style="background-color: #00CCFF;">
						<div class="intro-mockup-wrapper">						
							<div class="caption-mockup">
								<h2>Conocenos mas de cerca</h2>
							</div><!-- caption -->	
							<div class="photocaption">
								
							</div><!-- photocaption -->													
							<div class="intro-mockup">
								<img src="img/IMG_11.png" alt="">
							</div><!-- intro-mockup -->	
						</div><!-- intro-mockup-wrapper -->										
					</div>
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main">

				

				<section class="row section">
					<div class="row-content buffer even clear-after">	
						<div class="column six">
							<h2>Más que una cristalería.</h2>
							<p>Nacemos de una empresa familiar venezolana, con más de 40 años de experiencia apostando a proyectos de remodelación y construcción de espacios interiores y exteriores, en Venezuela.</p><p>Contamos con un equipo sólido de profesionales en el área de arquitectura, ingeniería, diseño y ejecución, para ofrecer a nuestros clientes un servicio de 360° en sus proyectos arquitectónicos y de remodelación</p>
							<p><em>¿Estas interesado? </em></p>
							<a class="button transparent aqua" href="#">Contactanos</a>
						</div>
						<div class="side-mockup right-mockup animation">
							<div class="slider ipad-slider grey" data-autoplay="false">
								<figure>
									<div><img src="img/IMG_5993.png" alt=""></div>
								</figure>
							</div>
						</div>
					</div>	
				</section>	

							

			</div><!-- id-main -->
		</main><!-- main -->

		<?php
		include("footer.php")
		?>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>

	</body>

</html>
