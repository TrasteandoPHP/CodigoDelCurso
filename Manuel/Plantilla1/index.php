<!DOCTYPE HTML>
<html>
	<head>
		<title>3Mil Anuncios </title>
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
							<header></header>
							<section class="tiles">

							<?php
								$numero = 1;
								include ("./assets/php/conexion.php");
								$sqlConsultaAnuncios = "SELECT * FROM anuncios";
								$ejecutarConexionConsultaAnuncios = $conexion->query($sqlConsultaAnuncios);
								foreach($ejecutarConexionConsultaAnuncios as $registro)
								{  
									// Voy a extraer los datos
									$titulo = $registro["nom_anu"];
									$precio = $registro["precio_anu"];
									$codigo = $registro["cod_anu"];
									$descripcion = $registro["des_anu"]; 
									
									// Utilizo el código para buscar la imagen
									$sqlConsultaImagen = "SELECT * FROM imagenes WHERE cod_anu='$codigo'";
									$ejecutaConsultaImagen = $conexion->query($sqlConsultaImagen);
									$registroImagen = $ejecutaConsultaImagen->fetch_array();
									$imagen = $registroImagen["nom_ima"];
									$ruta = "./imagenes/$codigo/$imagen";
							?>	
								<article class="style<?php echo $numero?>">
									<span class="image">
									<img src="<?php echo $ruta?>" alt="" width="50px" height="150px">
									</span>
									<a href="generic.html">
										<h2><?php echo $titulo ?></h2>
										<div class="content">
											<p><?php echo $descripcion;?></p>
										</div>
									</a>
								</article>	
							<?php
									$numero+=1;
									if($numero==6)
									{
										$numero=1;
									} 
							    }
        					?> 								
							</section>
						</div> <!-- Inner -->
					</div> <!-- Main -->
			</div> <!-- Wrapper -->
		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>