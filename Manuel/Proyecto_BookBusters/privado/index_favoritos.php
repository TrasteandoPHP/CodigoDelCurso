<?php
	session_start();
	if(isset($_SESSION["bookbusters"])) {
    ?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Bookbusters - Favoritos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
										<li><a href="index.php" class=" fa fa-home"><span class="label"></span></a></li>
										<li><a href="notificaciones.php" class=" fa fa-bell"><span class="label"></span></a></li>
										<li><a href="prestamos.php" class=" fa fa-book"><span class="label"></span></a></li>
										<li><a href="index_favoritos.php" class=" fa fa-heart"><span class="label"></span></a></li>
										<li><a href="perfil.php" class=" fa fa-user"><span class="label"></span></a></li>
										<li><a href="juegos.php" class=" fa fa-dice"><span class="label"></span></a></li>
										<li><a href="exit.php" class="fa-solid fa-arrow-right-from-bracket"><span class="label"></span></a></li>
									</ul>
								</header>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Favoritos</h2>
									</header>
									<div class="posts">
										<!-- VAMOS A LA BASE DE DATOS A BUSCAR LOS LIBROS FAVORITOS DEL USUARIO -->
										<?php
                                                $conexion=new mysqli("10.10.10.199", "busters", "1234", "biblioteca");
    // usamos cod_usu=1 de ejemplo a la espera de que haya session
	$cod_usu = $_SESSION["bookbusters"];
    $sql_fav="SELECT * FROM favoritos INNER JOIN libros USING (cod_lib) WHERE cod_usu='$cod_usu' ORDER BY libros.titulo_lib ASC";
    $ejec_fav=$conexion->query($sql_fav);
    foreach ($ejec_fav as $reg_fav) {
        $codigo_libro=$reg_fav["cod_lib"];
        // ahora sacamos los datos del libro

        //foreach ($conexion->query($sql_librofav) as $reg_librofav)
        //{
        $titulo=$reg_fav["titulo_lib"];
        $resumen=$reg_fav["resumen_lib"];
        //usamos imagen de prueba mientras no haya en la BD
        $portada="libro.jpg";

        //}
        ?>
														<article>
															<!-- añadimos las variables del libro a mostrar -->
															<a href="./verlibro.php?codlib='<?php echo $codigo_libro ?>'" class="image"><img src="../images/portadas/<?php echo $codigo_libro?>/<?php echo $portada?>" alt="" /></a>
															<h3><?php echo $titulo ?></h3>
															<p><?php echo $resumen?></p>
															<ul class="actions">
																<li><a href="#" class="button">Prestamo</a></li>
																<li>
																	<i id="<?php echo $codigo_libro?>" onmouseover="hover_cor_in(this.id)"  onmouseleave="hover_cor_out(this.id)" onclick="addFavCor(this.id)" class="fa-regular fa-heart" style="font-size:40px;color:#f56a6a;text-align:center"></i>
																</li>
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
										<li><a href="index.html">Homepage</a></li>
										<li><a href="generic.html">Generic</a></li>
										<li><a href="elements.html">Elements</a></li>
										<li>
											<span class="opener">Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Etiam Dolore</a></li>
										<li><a href="#">Adipiscing</a></li>
										<li>
											<span class="opener">Another Submenu</span>
											<ul>
												<li><a href="#">Lorem Dolor</a></li>
												<li><a href="#">Ipsum Adipiscing</a></li>
												<li><a href="#">Tempus Magna</a></li>
												<li><a href="#">Feugiat Veroeros</a></li>
											</ul>
										</li>
										<li><a href="#">Maximus Erat</a></li>
										<li><a href="#">Sapien Mauris</a></li>
										<li><a href="#">Amet Lacinia</a></li>
									</ul>
								</nav>

							

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script src="../assets/js/favoritos.js"></script> 

	</body>
</html>
<?php
}
else
{
	echo "
		<script>
			alert('Area restringida');
			window.location.href='../index.html';
		</script>
	";
}
?>