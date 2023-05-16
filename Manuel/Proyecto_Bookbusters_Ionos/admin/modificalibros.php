<?php
session_start();
if (isset($_SESSION["admin"])) {
?>

	<!DOCTYPE HTML>
	<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
	<html>

	<head>
		<title>Admin-Alta Libros</title>
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
		<link rel="stylesheet" href="../assets/css/main.css" />
		<script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
		<style>
			tr.datos:hover {
				background-color: lightgrey;
			}
		</style>
	</head>

	<body class="is-preload">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Main -->
			<div id="main">
				<div class="inner">

					<!-- Header -->
					<header id="header">
						<a href="./index_administrador.php" class="logo"><img style="width: 20%;" src="./../images/logo.png"></a>
						<ul class="icons">
							<li><a href="./index_administrador.php" class=" fa fa-home"><span class="label"></span></a></li>
							<li><a href="#" class=" fa fa-dice"><span class="label"></span></a></li>
							<li><a href="./login_administrador.html" class="fa-solid fa-arrow-right-from-bracket"><span class="label"></span></a></li>
						</ul>
					</header>

					<!-- Content -->
					<section>
						<header class="main">
							<h2>Modifica Libro</h2>
							
								<div class="col-12">
								<abbr title="Volver"><i class="fa-solid fa-circle-arrow-left" style="font-size: 2.5em;cursor:pointer;" onclick="window.location.href='./libros.php'"></i> </abbr>
								</div>
															
														
							
						</header>

						<!-- <hr class="major" /> -->

						<!-- Elements -->
						<div >

							<?php
								$codlib=$_GET["codigo"];

								$conexion=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
								$buslib = "SELECT * FROM libros INNER JOIN generos USING (genero_lib) WHERE cod_lib=$codlib";
								$ejlib = $conexion->query($buslib);
								foreach($ejlib as $registro)
								{
									$isbn=$registro["isbn_lib"];
									$tit=$registro["titulo_lib"];
									$subtit=$registro["subtitulo_lib"];
									$autor=$registro["autor_lib"];
									$edit=$registro["editorial_lib"];
									$codgen=$registro["genero_lib"];
									$nomgen=$registro["nom_gen"];
									$res=$registro["resumen_lib"];
									$idioma=$registro["idioma_lib"];
									$paginas=$registro["paginas_lib"];
									$ima=$registro["imagen_lib"];
									$falta=$registro["falta_lib"];
									$disp=$registro["disponible_lib"];


								}

							?>


								
                                <form action="./actualizalibros.php" method="POST" enctype="multipart/form-data">
                                	<div class="row gtr-uniform">
															<div class="col-2 col-12-xsmall">
																<input type="text" name="isbn" placeholder="ISBN" value="<?php echo $isbn?>" required>
																<input type="hidden" name="codigo" value="<?php echo $codlib?>" >
															</div>
															<div class="col-5 col-12-xsmall">
																<input type="text" name="tit" placeholder="Titulo del libro" value="<?php echo $tit?>" required>									
															</div>
															<div class="col-5 col-12-xsmall">
																<input type="text" name="subt" placeholder="Subtitulo del libro" value="<?php echo $subtit?>" required>
															</div>


															<div class="col-4 col-12-xsmall">
																<input type="text" name="aut" placeholder="Autor" value="<?php echo $autor?>" required>
															</div>
															<div class="col-4 col-12-xsmall">
																<input type="text" name="edit" placeholder="Editorial" value="<?php echo $edit?>" required>									
															</div>
															<div class="col-4 col-12-xsmall">
																<select name="gen"  required>
								                                    <?php
								                                    
								                                    $sql="SELECT * FROM generos";
								                                    $ejecutar=$conexion->query($sql);
								                                    echo "<option value=$codgen>$nomgen</option>";
								                                    
								                                    foreach($ejecutar as $registro)
								                                    {
								                                        $genero=$registro["nom_gen"];
								                                        $cgenero=$registro["cod_gen"];
								                                        echo "<option value=$cgenero>$genero</option>";
								                                    }
								                                    ?>
								                                </select> 
															</div>

															<div class="col-12">
																 <textarea name="res" placeholder="Resumen del libro" value="" required rows=6 style="resize:none"><?php echo $res ?></textarea>
															</div>

															
															<!-- Break -->
															<div class="col-4 col-12-xsmall">
																<select name="idi" value="<?php echo $idioma?>" required>
								                                    <option value="Español">Español</option>
								                                    <option value="Inglés">Inglés</option>
								                                    <option value="Francés">Francés</option>
								                                    <option value="Portugués">Portugués</option>
								                                </select>  
															</div>
															<div class="col-4 col-12-xsmall">
																<input type="text" name="pag" placeholder="Nº Páginas" value="<?php echo $paginas?>" required>
															</div>
															<div class="col-4 col-12-xsmall">
																<input type="file" name="img" value="<?php echo $ima?>" class="form-control" style="display: none;">
																<a  href="javascript:void" onclick="$('input[type=file]').click()" class="button" style="width:100%;">Elegir portada</a>
															</div>
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" value="Modifica libro"  class="primary" /></li>
																	
																</ul>
															</div>
														</div>

                                </form>
								

							</body>
						</div>

					</section>

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
							<li><a href="#">Juegos</a></li>
							<li><a href="./login_administrador.html">Salir</a></li>
						</ul>
					</nav>
					<footer id="footer">
						<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>
				</div>
			</div>

		</div>

		<!-- Scripts -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/browser.min.js"></script>
		<script src="../assets/js/breakpoints.min.js"></script>
		<script src="../assets/js/util.js"></script>
		<script src="../assets/js/main.js"></script>



		
	</body>

	</html>
<?php
} else {
	echo "
		<script>
			alert('Area restringida');
			window.location.href='./login_administrador.html';
		</script>
	";
}

$conexion->close();

?>


