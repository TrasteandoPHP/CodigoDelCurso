<?php
	session_start();
	if(isset($_SESSION['bookbusters']))
	{
	$codusuario = $_SESSION['bookbusters'];
	?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="./images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="./images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="./images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="./images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="./images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="./images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="./images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-icon-180x180.png">
		<!-- <link rel="icon" type="image/png" sizes="192x192"  href="./images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png"> -->
		<link rel="manifest" href="./images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="./images/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="./../assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><img style="width: 20%;" src="./../images/logo.png"></a>
									<ul class="icons">
										<li><a href="index.php" class=" fa fa-home" title="Ir a índice"><span class="label"></span></a></li>										
										<li><a id="notificaciones" href="notificaciones.php" class=" fa fa-bell" title="Ir a notificaciones"><span class="label"></span></a></li>
										<li><a href="historial.html" class=" fa fa-book" title="Ir a historial"><span class="label"></span></a></li>
										<li><a href="index_favoritos.php" class=" fa fa-heart" title="Ir a favoritos"><span class="label"></span></a></li>
										<li><a href="perfil.php" class=" fa fa-user" title="Ir a perfil"><span class="label"></span></a></li>
										<li><a href="./juegos.php" class=" fa fa-dice" title="Ir a juegos"><span class="label"></span></a></li>
										<li><a href="exit.php" class="fa-solid fa-arrow-right-from-bracket" title="Salir sesión"><span class="label"></span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									

									<!-- Elements -->
										<h2 id="elements">Notificaciones</h2>
										<div class="row gtr-200">
											<div class="col-12 col-12-medium">

												<!-- Text stuff -->
													

												<!-- Table -->
													<?php
																	include("./php/funciones.php");
																	$con = conex();
																	$ejnot = consulta("notificaciones WHERE cod_usu='$codusuario'");
																	if($ejnot->num_rows >0)
																	{

																		?>
																			<div class="table-wrapper">
																				<table>
																					<thead>
																						<tr>
																							<th>#</th>
																							<th>Libro</th>
																							<th>Fecha entrega</th>
																							<th>Enviada el...</th>
																							<th>Estado</th>
																						</tr>
																					</thead>
																					<tbody>
																						<?php
																							$cont = 0;
																							foreach($ejnot as $regnot)
																							{
																								$cont++;
																							if($regnot['leida_not']==0)
																							{
																								$icono = "<i id='ojo_".$regnot["cod_not"]."' class='fa fa-eye-slash' onclick='leido(this.id)'></i>";
																							}
																							else
																							{
																								$icono = "<i class='fa fa-eye'></i>'";	
																							}	
																						?>
																								<tr>
																									<td><?php echo $cont;?></td>
																									<td><?php echo $regnot['nom_lib'];?></td>
																									<td><?php echo $regnot['fentrega_not'];?></td>
																									<td><?php echo $regnot['fenvio_not'];?></td>
																									<td><?php echo $icono;?></td>
																								</tr>
																							<?php
																								}
																							?>
																					</tbody>
																				</table>
																			</div>
																		<?php

																	}
																	else
																	{
																		echo "<h3>Sin notificaciones</h3>";
																	}	

																?>
													

													

											</div>
											

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar" class="inactive">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="./index.php">Inicio</a></li>
										<li><a href="./historial.html">Historial</a></li>
										<li><a href="./index_favoritos.php">Favoritos</a></li>
										<li><a href="./perfil.php">Perfil</a></li>
										<li><a href="juegos.php">Juegos</a></li>									
										<li><a href="./exit.php">Salir</a></li>									
									</ul>
								</nav>
								<section>
									<header class="major">
										<h2>Información</h2>
									</header>
									<p>Tu biblioteca online</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="formulario.html">Enviar correo</a></li>
										<li class="icon solid fa-book"><a href="terminosuso.php">Terminos de uso</a></li>	
										<li class="icon solid fa-newspaper"><a href="polpriv.php">Politica de Privacidad</a></li>
										<li class="icon solid fa-people-group"><a href="equipo.php" style="text-decoration:none">Equipo de Desarrollo</a></li>
									</ul>
								</section>

							
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Bookbusters</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


			<script>
				function leido(codnotf){
					$.post(
						"./php/notifica_y_cambio.php",
						{cod_not : codnotf.split("_")[1]},
						function(out){
							if(parseInt(out)){
								$("#"+codnotf).attr("class","fa fa-eye");
							}
						}
					);
				}
			</script>

	</body>
</html>
<?php
}
else
{
	echo "
		<script>
			alert('Area restringida');
			window.location.href='../login.html';
		</script>
	";
}
?>