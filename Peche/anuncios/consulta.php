<h1>Anuncios</h1>
<hr>
<button onclick="window.location.href='index.html'">Publica tu anuncio</button>
<hr>
<?php
$con=new mysqli("localhost","root","","ejemplo123");
$sqlanu="SELECT * FROM anuncios ORDER BY rand() ";
$ejecutar = $con->query($sqlanu);
foreach($ejecutar as $reg)
{
	$tit = $reg["titulo_anu"];
	$cod = $reg["cod_anu"];
	//vamos a buscar la imagen
	$sqlima="SELECT * FROM imagenes WHERE cod_anu = '$cod'";
	$ejecutarima = $con->query($sqlima);
	$regima=$ejecutarima->fetch_array();
	$imagen = $regima["imagen_ima"];
	$ruta = "./imagenes/$cod/$imagen";
	echo "<a href='detalle.php?codigo=$cod'><img src='$ruta' width='20%'></a>
$tit
<a href='detalle.php?codigo=$cod'>Ver Detalle</a>
	";
}
?>