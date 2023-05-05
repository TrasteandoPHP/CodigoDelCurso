<?php
	session_start();
	if(isset($_SESSION['bookbusters']))
	{
		$codusuario = $_SESSION['bookbusters'];
		$conexion = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
		$sql= "SELECT * FROM usuarios WHERE cod_usu=$codusuario";
		$eje=$conexion->query($sql);
		if ($reg = $eje->fetch_array())

		{
			$nom = $reg["nom_usu"];
			$ap1 = $reg["ap1_usu"];
			$ap2 = $reg["ap2_usu"];
			$ema = $reg["email_usu"];
			$pas = $reg["pass_usu"];
			$act = $reg["activo_usu"];
			$img = $reg["img_usu"];
			$fal =$reg["falta_usu"];

		}
		else
		{
			echo "Usuario inexistente";
		}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>PERFIL DE USUARIO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./../assets/css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body class="is-preload">

		<script>
			function notif(cod)
			{
				$.post
				(
					"./php/notifica_icon.php",
					{
						cod_usu : cod
					},
					function vuelta(notif){
						if(notif!="")
						{
							$("#notificaciones").attr("class","fa fa-bell fa-bounce");
						}
					}
				);
			}
		</script>

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
						<?php

							// usamos cod_usu=1 de ejemplo a la espera de que haya session
							$cod_usu = $_SESSION["bookbusters"];

							// miramos si hay notificaciones----------------------------------------------COMPROBACION NOTIFICACION 
							echo "<script>notif('$cod_usu')</script>";

							if($img == "")
							{
								$img1 = "avatares/Bookbusters.png";
							}
							else
							{
								$img1 = $img;
							}
						?>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1> <?php echo "$nom";?><br />
											</h1>
											<p>Tu Información en:</p>
										</header>
										<h1>BOOKBUSTERS</h1>
										<ul class="actions">
											<!-- <li><a href="#" class="button big">learn more</a></li> -->
										</ul>
									</div>
									<span class="image object">
										<img src="<?php echo "$img1"?>" alt="" style="max-height:400px; max-width: 400px">

									</span>

								</section>
								<!-- <button onclick="window.location.href='modificarimg.php'">Cambiar Imagen</button> -->
								<!-- <section> -->
										<img src="avatares/Bookbusters1.png" alt="Bookbusters1.png" id="img1" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbusters2.png" alt="Bookbusters2.png" id="img2" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbusters3.png" alt="Bookbusters3.png" id="img3" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbusters4.png" alt="Bookbusters4.png" id="img4" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbustersbotas.png" alt="Bookbustersbotas.png" id="img5" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbusterscapa.png" alt="Bookbusterscapa.png" id="img6" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbustersgafas.png" alt="Bookbustersgafas.png" id="img7" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbusterssombrero.png" alt="Bookbusterssombrero.png" id="img8" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbustersnariz.jpg" alt="Bookbustersnariz.jpg" id="img9" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbustersverde.png" alt="Bookbustersverde.png" id="img10" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbusters5.png" alt="Bookbusters5.png" id="img11" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbustersazul.png" alt="Bookbustersazul.png" id="img12" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/BookbustersRojo.png" alt="BookbustersRojo.png" id="img13" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">
										<img src="avatares/Bookbusterscasco.png" alt="Bookbusterscasco.png" id="img14" style="max-height:50px; max-width: 50px;cursor:pointer" onclick="seleccion(this.id)">

								<!-- </section>		 -->
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Datos Personales</h2>
									</header>
									<div class="features">
										
										<article>
											<span> <i class="icon solid fa-solid fa-user"></i></span>
											<div class="content">
												<h3>Primer Apellido: </h3>
												<p style=color:blue><?php echo "$ap1";?></p>
											</div>
										</article>
										<article>
											<span> <i class="icon solid fa-solid fa-calendar" style="color: #1b1c54;"></i></span>
											<div class="content">
												<h3><?php ?></h3>
												<p style=color:green>Fecha de Alta: <?php  echo "$fal"?></p>
											</div>
										</article>					
															
										<article>
											<span> <i class="icon solid fa-solid fa-user"></i></span>
											<div class="content">
												<h3>Segundo Apellido:</h3>
												<p style=color:blue><?php echo "$ap2";?></p>
											</div>
										</article>
										<article>
											<span> <i class=" icon solid fa-regular fa-envelope"></i> </span>
											<div class="content">
												<h3>Correo electrónico:</h3>
												<p style=color:blue><?php echo "$ema";?></p>
											</div>
										</article>										
									</div>
								</section>								
										<article>
											<h3 style= color:blue>Quiero cambiar mi contraseña</h3>
											<form action="modificar.php" method="POST">
												<input type="password" name="contrasena" placeholder="Nueva contraseña" required>
												<input type="submit" value="Cambiar">
											</form>
										</article>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>LIBROS RESERVADOS</h2>
									</header>

									<div class="posts">
										<?php
										$sql1= "SELECT * FROM prestamos WHERE cod_usu ='$codusuario'";
										$lib=$conexion->query($sql1);
										foreach ($lib as $reg) 
										{
											$codlib= $reg['cod_lib'];
											$libro="SELECT * FROM libros WHERE cod_lib = '$codlib'";
											$ejelib=$conexion ->query($libro);
											$libreg= $ejelib->fetch_array();
											$nombre=$libreg['titulo_lib'];
											$imagen=$libreg['imagen_lib'];

											$ruta = "./../images/portadas/$codlib/$imagen";
											


										?>
										<article>
											<a href="verlibro.php?codlib=<?php echo $codlib?>" class="image"><img src="<?php echo $ruta?>" alt="" /></a>
											<h3><?php echo $nombre?></h3>
											
											<ul class="actions">
												<li><a href="verlibro.php?codlib=<?php echo $codlib?>" class="button">Ver libro</a></li>
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
			<script src="./../assets/js/jquery.min.js"></script>
			<script src="./../assets/js/browser.min.js"></script>
			<script src="./../assets/js/breakpoints.min.js"></script>
			<script src="./../assets/js/util.js"></script>
			<script src="./../assets/js/main.js"></script>
			<script type="text/javascript">
				function seleccion(iden)
				{
					var img = $("#"+iden).attr("src");
					$.post(
						"./php/cambiaimg.php",
						{pic:img},
						function(respuesta)
						{
							window.location.href='./perfil.php';
						}
						);
				}
			</script>

	</body>
</html>
<?php
	$conexion->close();
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