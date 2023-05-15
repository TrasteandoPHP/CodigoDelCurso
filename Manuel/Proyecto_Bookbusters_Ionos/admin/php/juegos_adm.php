<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Juegos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./../../assets/css/main.css"/>
		<script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">				

				<!-- Main -->
					<div id="main">
						<div class="inner">	
						
							<!-- Header -->
								<header id="header">
									<a href="../index_administrador.php" class="logo"><img style="width: 20%;" src="./../../images/logo.png"></a>
									<ul class="icons">
										<li><a href="../index_administrador.php" class=" fa fa-home"><span class="label"></span></a></li>
										<li><a href="../login_administrador.html" class="fa-solid fa-arrow-right-from-bracket"><span class="label"></span></a></li>
									</ul>
								</header>
								
							<!-- Section -->


						<section id="banner">
									<div class="content">
										<header>
											<H2>Disfruta los Juegos<H2>
										</header>
										<h1 style=color:blue>BOOKBUSTERS</h1>

									</div>							

									<div class="features">
										
										<article>
											<span> <i class="icon solid fa-solid fa-user"></i></span>
											<div class="content">
												<h2>MINIJUEGOS</h2>
												<?php 
												$envio2 = base64_encode("https://www.minijuegos.com/");
												?>
												<button onclick="window.location.href='./verjuegos_adm.php?t=Ahorcado&p=<?php echo $envio2?>'">Jugar</button>
											</div>
										</article>
										<article>
											<span> <i class="icon solid fa-solid fa-user"></i></span>
											<div class="content">
												<h2>WONDERWORD</h2>
												<h3>Adivina la palabra oculta</h3>
												<?php 
												$envio3 = base64_encode("https://bookbusters.es/privado/palabras/index.html");
												?> 
												<button onclick="window.location.href='./verjuegos_adm.php?t=Wonderword&p=<?php echo $envio3?>'">Jugar</button>
												
											</div>
										</article>					
															
										<article>
											<span> <i class="icon solid fa-solid fa-user"></i></span>
											<div class="content">
												<h2>CRUCIGRAMAS</h2>
												<?php
													$envio4 = base64_encode("https://www.tarkus.info/");
												?>
												<button onclick="window.location.href='./verjuegos_adm.php?t=crucigramas&p=<?php echo $envio4?>'">Jugar</button>
											</div>
										</article>
										<article>
											<span> <i class="icon solid fa-solid fa-user"></i> </span>
											<div class="content">
												<h2>DAMAS </h2>
												<?php
													$envio = base64_encode("https://playpager.com/damas/");
												?>
												<button onclick="window.location.href='./verjuegos_adm.php?t=Damas&p=<?php echo $envio?>'">Jugar</button>
											</div>
										</article>										
									</div>
					</section>
					<a href="../index_administrador.php" class="button primary">Volver</a>
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
									<li><a href="../index_administrador.php">Inicio</a></li>
									<li><a href="./../login_administrador.html">Salir</a></li>
								</ul>
							</nav>
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Bookbusters</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="./../../assets/js/jquery.min.js"></script>
			<script src="./../../assets/js/jquery.quicksearch.js"></script>
			<script src="./../../assets/js/browser.min.js"></script>
			<script src="./../../assets/js/breakpoints.min.js"></script>
			<script src="./../../assets/js/util.js"></script>
			<script src="./../../assets/js/main.js"></script>



	</body>
</html>