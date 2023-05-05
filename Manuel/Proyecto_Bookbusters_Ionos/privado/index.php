<?php
	session_start();
	if(isset($_SESSION['bookbusters']))
	{
	$codusuario = $_SESSION['bookbusters'];
	include("./php/funciones.php");
	?>
<!DOCTYPE HTML>
<html>
	
<head>
		<title>Bookbusters - Favoritos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="../assets/css/main.css" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<style>
		

		@keyframes display {
		0% {
			transform: translateX(200px);
			opacity: 0;
		}
		10% {
			transform: translateX(0);
			opacity: 1;
		}
		20% {
			transform: translateX(0);
			opacity: 1;
		}
		30% {
			transform: translateX(-200px);
			opacity: 0;
		}
		100% {
			transform: translateX(-200px);
			opacity: 0;
		}
		}

		.pic-ctn {
		position: relative;
		
		height: 300px;
		margin-top: 10vh;
		}

		.pic-ctn > img {
		
		position: absolute;
		top: 0;
		left: 42%;
		opacity: 0;
		animation: display 24s infinite;
		
		}

		img:nth-child(2) {
		animation-delay: 3s;
		}
		img:nth-child(3) {
		animation-delay: 6s;
		}
		img:nth-child(4) {
		animation-delay: 9s;
		}
		img:nth-child(5) {
		animation-delay: 12s;
		}
		img:nth-child(6) {
		animation-delay: 15s;
		}
		img:nth-child(7) {
		animation-delay: 18s;
		}
		img:nth-child(8) {
		animation-delay: 21s;
		}

	</style>
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
								<br>
				<center><h2>TOP LIBROS</h2></center>
	<div class="inner">
	<div class="pic-ctn">		
		<?php
			
			$rec=recoge();
			foreach($rec as $reg)
			{
				$temptit=$reg["titulo_lib"];
				$tempimg=$reg["imagen_lib"];
				$tempcod=$reg["cod_lib"];
				$tempimg=$tempcod."/".$tempimg;
				//echo $tempimg;
				echo "<img src='./../images/portadas/".$tempimg."' alt='' style='width:15%;height:auto;border:none;border-radius:5px;padding-bottom:100px'>";
				
			}
			conex()->close();
		?>	
  </div>
	</div>
	

<section>
									<header class="major">
										<center><h2>Biblioteca</h2></center>
									</header>
									<div class="posts">
<?php
			$recibe=consulta("libros");
foreach($recibe as $registro){
	$codigodellibromia = $registro["cod_lib"];
	$mirarfavoritos = consulta("favoritos WHERE cod_usu='$codusuario' AND cod_lib='$codigodellibromia'");
	if($mirarfavoritos->fetch_array())
	{
		$apintarcorazon = '<a><font color="red"><i id="'.$registro["cod_lib"].'"  class="fa-solid fa-heart" onclick="addFavCor(this.id)"></i></font></a>';
	}
	else
	{
		$apintarcorazon = '<a><i id="'.$registro["cod_lib"].'"  class="fa-regular fa-heart" onclick="addFavCor(this.id)"></i></a>';
	}
	// sacamos codigo de libro
	// tenemos el codigo de usuario
	// consultadmos a favoritos por libro y usuario
	// crar variable con el corazon
	if($registro["disponible_lib"] == 0)
	{
		//Libro disponbile
		echo'
			<article style="display:flex;flex-direction:column;align-items:center;">
				<a href="verlibro.php?codlib='.$registro["cod_lib"].'" class="image"><img src="./../images/portadas/'.$registro["cod_lib"].'/'.$registro["imagen_lib"].'" alt="" style="height:550px"/></a>
				<h3>'.$registro["titulo_lib"].'</h3>
				<div style="display:flex; justify-content:space-between">
					<div>
						'.$apintarcorazon.'
					</div>
					<div>
						'.estrella($registro["cod_lib"]).'
					</div>			
				</div>
				<ul class="actions">
					<li><a href="verlibro.php?codlib='.$registro["cod_lib"].'" class="button">Ver</a></li>
					<li style="float:right;margin-left:50%;margin-top:10px;color:lime"><abbr title="Libro disponible">
					<i class="fa fa-book-open fa-beat fa-xl" ></i></abbr></li>			
				</ul>		

			</article>
		';
	}
	else
	{
		//Libro no disponible
		echo'
			<article style="display:flex;flex-direction:column;align-items:center;">
				<a href="verlibro.php?codlib='.$registro["cod_lib"].'" class="image"><img src="./../images/portadas/'.$registro["cod_lib"].'/'.$registro["imagen_lib"].'" alt="" style="height:550px"/></a>
				<h3>'.$registro["titulo_lib"].'</h3>
				<div style="display:flex; justify-content:space-between">
					<div>
						'.$apintarcorazon.'
					</div>
					<div>
						'.estrella($registro["cod_lib"]).'
					</div>			
				</div>
				<ul class="actions">
					<li><a href="verlibro.php?codlib='.$registro["cod_lib"].'" class="button">Ver</a></li>
					<li style="float:right;margin-left:50%;margin-top:10px;color:red"><abbr title="Libro NO disponible">
					<i class="fa fa-book-open-reader fa-xl"></i></abbr></li>			
				</ul>		

			</article>
		';
	}
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script src="./../assets/js/favoritos.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	
	<script src="../assets/js/app.js"></script>



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