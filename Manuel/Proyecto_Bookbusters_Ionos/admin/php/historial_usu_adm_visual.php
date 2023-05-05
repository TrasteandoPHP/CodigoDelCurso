<?php
	session_start();
	if (isset($_SESSION["admin"]))
	{
		$cod_usu = $_GET["cod"];
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Historial</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./../../assets/css/main.css"/>
		<script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">				

				<!-- Main -->
					<div id="main">
						<div class="inner">	
						
							<!-- Header -->
							<header id="header">
								<a href="../../index.php" class="logo"><img style="width: 20%;" src="./../../images/logo.png"></a>
								<ul class="icons">
									<li><a href="../index_administrador.php" class=" fa fa-home"><span class="label"></span></a></li>
									<li><a href="#" class=" fa fa-dice"><span class="label"></span></a></li>
									<li><a href="../login_administrador.html" class="fa-solid fa-arrow-right-from-bracket"><span class="label"></span></a></li>
								</ul>
							</header>
								
							<!-- Section -->
								<section style='padding: 4em 0 4em 0;'>
									<header class="major">
										<h2 id="nombre">Historial de </h2>
									</header>
									<header class="main">
										<div>
											<abbr title="Volver"><i class="fa-solid fa-circle-arrow-left" style="font-size: 2.5em;cursor:pointer;" onclick="window.location.href='../gestion_usu.php'"></i> </abbr>
										</div>
									</header>
									<!-- Search -->
								<section id="search" class="alt">
									<form style="width:25%">
										<input onkeyup="filtrar()" type="text" name="filtro" id="filtro" placeholder="Buscar...."/>
										<p id='textoEscrito'></p>
									</form>
								</section>
									<div class="posts" id="libros">

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
										<li><a href="./index.php">Inicio</a></li>
										<li><a href="./historial.html">Historial</a></li>
										<li><a href="./index_favoritos.php">Favoritos</a></li>
										<li><a href="./perfil.php">Perfil</a></li>
										<li><a href="#">Juegos</a></li>									
										<li><a href="./exit.php" style='color:red'>Salir</a></li>									
									</ul>
								</nav>
								<section>
									<header class="major">
										<h2>Contáctanos</h2>
									</header>
									<p>Estamos abiertos en horario lectivo de la Escuela de Finanzas EFF Bussines School de Oleiros</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="C:\Program Files\Mozilla Thunderbird\thunderbird.exe">alfonso@medellin.ef</a></li>
										<li class="icon solid fa-phone">(981) 87 86 34</li>
										<li class="icon solid fa-home">Dirección: Rúa Salvador de Madariaga, 50, 15173 Oleiros, A Coruña</li>
										<li class="icon solid fa-book"><a href="terminosuso.php">Terminos de uso</a></li>	
										<li class="icon solid fa-newspaper"><a href="polpriv.php">Politica de Privacidad</a></li>
									</ul>
								</section>

							
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="./../../assets/js/jquery.min.js"></script>
			<script src="./../../assets/js/browser.min.js"></script>
			<script src="./../../assets/js/breakpoints.min.js"></script>
			<script src="./../../assets/js/util.js"></script>
			<script src="./../../assets/js/main.js"></script>

			<script>
				$(function(){
                    $.post(
                        "./historial_usu_adm_busca.php",
						{cod : <?php echo $cod_usu?>},
						function(echoPHP){
							$("#libros").html(echoPHP);
                        }
                    )
                })
				
				// $(function(){									
                //     $.post(
                //         "./php/notifica_historial.php",{},function(control){

				// 			if (control != "")
				// 			{
								
				// 				$("#notificaciones").attr("class","fa fa-bell fa-bounce");
				// 			}
                //         }
                //     )
                // })

				function filtrar(){
					textoFiltro = $('#filtro').val();
					$('#textoEscrito').text(textoFiltro);					
				}
				
			</script>

	</body>
</html>
<?php
	}
?>