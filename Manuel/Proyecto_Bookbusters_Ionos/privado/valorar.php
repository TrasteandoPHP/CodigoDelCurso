<?php
if(isset($_GET["m"]))
{
require_once("./php/funciones.php");
	$var=$_GET["m"];
	$cod=$_GET["u"];
	$p=$_GET["valoracion"];
		$des=encriptado("d",$var);
		$var=explode("$$",$des);
		$ver=valorar($var[0],$var[1],$cod,$p);
		$id=encriptado("e",$var[1]);
if($ver=="usado")
{conex()->close();
echo "<script>
alert('vinculo usado');

window.location.href='https://bookbusters.es';
	</script>";
	unset($var);
}
else{
	header("Cache-Control: no-cache, no-store, must-revalidate");
	header("Expires: 0");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BOOKBUSTER</title>
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
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="main">
				<div class="inner">
					<header id="header">
							<a href="https://bookbusters.es" class="logo"><strong>BOOKBUSTERS</strong> by Curso-OOP</a>
								<ul class="icons">
							<li><a href="https://bookbusters.es" class="icon solid fa-home"><span class="label">Twitter</span></a></li>
								</ul>
								</header>
									<section>
								<h1 style="font-family:'Times New Roman', Times, serif;">Valoración</h1>
								<h4 style="font-family: 'Tahoma';">Gracias por tu valoración agradecemos que nos dejes un comentario </h4>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">
												<form method="post" action="valorarup.php">
													<div class="row gtr-uniform">
														<div class="col-4 col-12-medium">
														<p style="font-size: xxx-large;color:#ff39ba;" id="estrellar"></p>
														</div>
														<div class="col-12">
														<input type="hidden" value=<?=$id;?> name="c" class="primary" />	
														</div>
														<div class="col-12">
														<textarea style="border-color:#ff39ba;font-size: large;" name="comen" id="demo-message" placeholder="Escriba su comentario" rows="6"></textarea>
														</div>
														<div class="col-12">
														<input type="submit" value="Valorar" class="primary" />	
														</div>
														</div>
													</form>
											</div>
										</div>
								</section>
						</div>
					</div>
				</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
$(Document).ready(function(){
estrellar('<?= $p;?>');
});
function estrellar(n){
	pinta="&#9733;";
for(x=1;x<=n;x++)
{
	$("#estrellar").append(pinta);
}
}
	</script>
	</body>
</html>
<?php
}

}
else{
	echo "<script>
	alert('vinculo usado');
	window.location.href='https://bookbusters.es';
	</script>";
}
?>
