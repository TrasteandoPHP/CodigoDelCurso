<?php
	$nom = $_POST["nombre"];
	$ema = $_POST["email"];
	
	$conexion = new mysqli("localhost","root","","ejemplo123");
	
	$sql = "INSERT INTO tabla1 (nom_tab1,email_tab1) VALUES ('$nom','$ema')";
	if($conexion->query($sql))
	{
		
		$consultar = "SELECT * FROM tabla1 ORDER BY cod_tab1 DESC LIMIT 1";
		$ejecutar = $conexion->query($consultar);
		$registro = $ejecutar->fetch_array();
		$cod = $registro["cod_tab1"];
		
		//las 4 líneas anteriores es lo mismo que esto:
		$cod = $conexion->insert_id;
		
		//creando una carpeta
		mkdir("./carpetas/$cod",0777);		
		
		
		//vamos a grabar en la segunda tabla2
		$sqltab2 = "INSERT INTO tabla2 (cod_tab1,nom_tab2) VALUES ('$cod','$nom')";
		$conexion->query($sqltab2);
		
	}
	else
	{}	




?>