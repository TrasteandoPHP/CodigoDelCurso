<?php
//Datos provenientes de contraolvidada.php
if(isset($_GET['envio']))
{

$mail=base64_decode($_GET["envio"]);
$e = $_GET["i"];

//buscamos la variable $e en la base de datos
$con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
$sql="SELECT * FROM usuarios WHERE uniq_usu='$e' AND email_usu='$mail'";
$ejecutar=$con->query($sql);
    if($reg = $ejecutar->fetch_array())
        {
            $codusu=$reg["cod_usu"];
            ?>

            <html>
	<head>
		<title>Blockbusters</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
	<!-- is-preload -->

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
										
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner" >
									<div class="content">
										<center>
											<img src="https://bookbusters.es/images/Bookbusters (4)_transparent2.png" alt="" style="border-radius:10px" />
                                        <br>
                                        <h2>Escribe tu nueva contraseña</h2>
						                    <form action="updatepass.php" method="POST">
												<div class="row gtr-uniform">							
													<div class="col-12 col-12-small">
														<input type="password" name="pass" id="demo-mail" value="" placeholder="Nueva Contraseña">
													</div>
						                       			 <input type="hidden" name="codusu" value="<?php echo $codusu; ?>">
						                        	<div class="col-12 col-12-small">
														<input type="submit" value="Modificar" class="primary">	
													</div>
												</div>
						                    </form>
                                    	
										</center>
                                    </div>
                                </section>    
                        	</div>
                        </div>
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
									</ul>
								</nav>
								<a href="./admin/login_administrador.html" class="fa fa-lock" style="font-size:30px"></a>
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


        <?php
        }
        else
        {
            header("location:https://bookbusters.es/login.html");    
        }
}
else
    {
        header("location:https://bookbusters.es/login.html");
    }  
?>