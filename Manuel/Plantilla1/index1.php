<!DOCTYPE HTML>

<html>
	<head>
		<title>Phantom</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
						<div class="inner">							
							<section class="tiles">
								<?php
									include("./../milanuncios/php/conexion.php");
									$sql="SELECT * FROM anuncios";
									$ejecutar = $conexion->query($sql);
									foreach($ejecutar as $registro)
									{
										$titulo = $registro["nom_anu"];
										$precio = $registro["precio_anu"];
																		
								?>

								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2><?php echo $titulo;?></h2>
										<div class="content">
											<p><?php echo $precio;?></p>
										</div>
									</a>
								</article>	
								<?php
									}
								?>
								
							</section>
						</div>
					</div>			
			</div>	

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>