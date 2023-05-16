<?php
	session_start();
	if (isset($_SESSION["admin"]))
	{	

?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Bookbusters</title>
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
		<link rel="stylesheet" href="./../assets/css/main.css"/>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="../index.php" class="logo"><img style="width: 20%;" src="./../images/logo.png"></a>
									<ul class="icons">
										<li><a href="./index_administrador.php" class=" fa fa-home"><span class="label"></span></a></li>
										<li><a href="./php/juegos_adm.php" class=" fa fa-dice"><span class="label"></span></a></li>
										<li><a href="./login_administrador.html" class="fa-solid fa-arrow-right-from-bracket"><span class="label"></span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<center>
											
												
											
											<h1>Equipo de desarrollo</h1>
											
							<img src="./../images/bookbusters-team.jpg"  alt="Equipo de desarrollo" style="width:80%"/>
							<h3>Javier, Pablo G., Luis, Dino, Manuel, Daniel, Pedro, Pablo F., Pedro P., Manuel C., Manolo, Alfonso</h3>
										</center>
									</div>
									
								</section>

							<!-- Section -->
								

							<!-- Section -->
								

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar" class="inactive">
					<div class="inner">

						<!-- Search -->
							<section id="search" class="alt">
								<form method="post" action="#">
									<input type="text" name="query" id="query" placeholder="Search" />
								</form>
							</section>

						<!-- Menu -->
							<nav id="menu">
								<header class="major">
									<h2>Menu</h2>
								</header>
								<ul>
									<li><a href="../index.php">Inicio</a></li>
									<li><a href="./php/juegos_adm.php">Juegos</a></li>
									<li><a href="./login_administrador.html">Salir</a></li>
									<li><a href="./equipo.php">Equipo de Desarrollo</a></li>

								</ul>
							</nav>
							<footer id="footer">
							<p class="copyright">&copy; Bookbusters.</p>
							</footer>
					</div>

			</div>
		</div>


		<!-- Scripts -->
			<script src="./../assets/js/jquery.min.js"></script>
			<script src="./../assets/js/browser.min.js"></script>
			<script src="./../assets/js/breakpoints.min.js"></script>
			<script src="./../assets/js/util.js"></script>
			<script src="./../assets/js/main.js"></script>
			<script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
	</body>
</html>
<?php
	}
	else
	{
		header("location:./../index.php");
	}	
?>
