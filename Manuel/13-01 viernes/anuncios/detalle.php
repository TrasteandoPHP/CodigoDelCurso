<?php

	//recibo codigo por get
	
	$cod = $_GET["codigo"];
	$conexion = new mysqli("localhost","root","","ejemplo123");
	$sqlanu = "SELECT * FROM anuncios WHERE cod_anu = '$cod'";
	$ejecutar = $conexion->query($sqlanu);
	$registro = $ejecutar->fetch_array();
	$tit = $registro["titulo_anu"];
	$men = $registro["mensaje_anu"];
	echo "$tit <br>";
	$sqlima = "SELECT * FROM imagenes WHERE cod_anu = '$cod'";
	$ejecutarima = $conexion->query($sqlima);
	foreach($ejecutarima as $registroima)
	{
		$imagen = $registroima["imagen_ima"];
		$ruta = "./imagenes/$cod/$imagen";
		echo "<img src='$ruta' width='80%'> <br>";
	}
	echo "$men <br>";
	echo "<button onclick='window.location.href=`consulta.php`'>Volver</button>"
	
	


?>