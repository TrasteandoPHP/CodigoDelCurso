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
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><img style="width: 20%;" src="./images/logo.png"></a>
									<ul class="icons">
										<li><a style="font-size:large" href="index.php" class="fa fa-home" aria-hidden="true"><span class="label"></span></a></li>
										<li><a style="font-size:large" href="registro.html" class="fa fa-user-plus" aria-hidden="true"><span class="label"></span></a></li>
										<li><a style="font-size:large" href="login.html" class="fas fa-sign-in-alt" aria-hidden="true"><span class="label"></span></a></li>	
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Bienvenido a "Bookbusters" <br />
											Aquí podrás encontrar tus libros para préstamo </h1>
											<h2>A continuación, te mostramos los libros más demandados</h2>
										</header>
										<p></p>
										<!-- <ul class="actions">
											<li><a href="#" class="button big">Learn More</a></li>
										</ul> -->
									</div>
									<span style=" height:25%; width:25%">
									
										<img src="images/Bookbusters (4)_transparente (1).png" alt="" />
									</span>
								</section>

							<!-- Section -->
								<!-- <section>
									
								</section> -->

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Top 8 libros</h2>
									</header>
									<div class="posts">			
						
                                    <?php
                                          //  $con=new mysqli("10.10.10.199","busters","1234","biblioteca");
										  $con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
											//cuando existan favoritos, cambiaremos el enlace a la tabla libros, por el de la tabla favoritos
											
                                            // $sql="SELECT * FROM libros ORDER BY RAND() LIMIT 8";
											$sql="SELECT *,count(cod_lib) as cuenta FROM libros INNER JOIN prestamos  using(cod_lib) group By cod_lib ORDER BY cod_lib DESC limit 8";
                                            $ejecutar=$con->query($sql);

                                            foreach($ejecutar as $registro)
                                            {
												$titulo=$registro["titulo_lib"];
												$imagen=$registro["imagen_lib"];
												$codigo=$registro["cod_lib"];
												$imagenmuestra="./images/portadas/$codigo/$imagen";

                                    ?>
												<article>
														<a href="#" class="image"><img src="<?php echo $imagenmuestra ; ?>" style="height:500px"></a>
														<h3>Accede</h3>    											
													<ul class="actions">
														<li><a href="login.html" class="button">Login</a></li>
													</ul>
												</article>
                                        	<?php
                                            }
                                            ?>
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search
								

							<!- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php" style="font-size:medium ;">Inicio</a></li>
										<li><a href="registro.html" style="font-size:medium ;">Registro</a></li>
										<li><a href="login.html" style="font-size:medium">Login</a></li>
										<li><a href="./admin/login_administrador.html" class="fa fa-lock" style="font-size:30px"></a><li>
										<li><a href="./equipo.html">Equipo de Desarrollo</a></li>
									</ul>
								</nav>
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Bookbuster</p>
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

	</body>
</html>