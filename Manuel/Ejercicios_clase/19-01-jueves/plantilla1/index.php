<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">Ipsum veroeros</a></li>
							<li><a href="generic.html">Tempus etiam</a></li>
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							
							<section class="tiles">
								
								<?php
								$numero = 1;
								include("./../milanuncios/php/conexion.php");
								$sql="SELECT * FROM anuncios";
								$ejecutar = $conexion->query($sql);
								foreach($ejecutar as $registro)
								{
									$titulo = $registro["nom_anu"];
									$precio = $registro["precio_anu"];
									$cod = $registro["cod_anu"];
									$sqlima = "SELECT * FROM imagenes WHERE cod_anu='$cod'";
									$ejecutarima = $conexion->query($sqlima);
									$registroima = $ejecutarima->fetch_array();
									$nomimg= $registroima["nom_ima"];
									$ruta = "./../milanuncios/imagenes/$cod/$nomimg";
								
								?>
								
								
								<article class="style<?php echo $numero;?>">
									<span class="image">
										<img src="<?php echo $ruta;?>" alt="" />
									</span>
									<a href="generic.html">
										<h2><?php echo $titulo;?></h2>
										<div class="content">
											<p><?php echo $precio;?></p>
										</div>
									</a>
								</article>
								<?php
									$numero++;
									if($numero==4)
									{
										$numero = 1;
									}
									else
									{
										//no hace nada
									}		
								}
								?>
								
								
								
								
							</section>
						</div>
					</div>

				<!-- Footer -->
					

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>