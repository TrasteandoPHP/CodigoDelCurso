<h1>Anuncios</h1>
<hr>
<button onclick="window.location.href='index.html'">Publica tu anuncio</button>
<hr>
<?php
	$conexion = new mysqli("localhost","root","","ejemplo123");
	$sqlanu ="SELECT * FROM anuncios ORDER BY rand()";
	$ejecutar = $conexion->query($sqlanu);
	foreach($ejecutar as $registro)
	{
		$tit = $registro["titulo_anu"];
		$cod = $registro["cod_anu"];
		//vamos a buscar la imagen
		$sqlima = "SELECT * FROM imagenes WHERE cod_anu = '$cod'";
		$ejecutarima = $conexion->query($sqlima);
		$registroima = $ejecutarima->fetch_array();
		$imagen = $registroima["imagen_ima"];
		$ruta = "./imagenes/$cod/$imagen";
		echo "
			<img src='$ruta' width='20%'>
			$tit
			<a href='detalle.php?codigo=$cod'>Ver detalle</a>
			<br>
		";
	}
	

?>