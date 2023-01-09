<?php
	// Recibimos los datos del formulario
	$nome = $_POST["nombre"];
	$mail = $_POST["email"];
		
	// Conectamos a la BBDD
	$conexion = new mysqli("127.0.0.1","root","","ejemplo1_23");
	
	// SQL para grabar los datos 
	$sqlGrabacionTab1 = "INSERT INTO tabla1 (nom_tab1, email_tab1) VALUES ('$nome', '$mail')";
	
	if($conexion->query($sqlGrabacionTab1))
	{
		//$sqlConsulta = "SELECT * FROM tabla1 ORDER BY cod_tab1 DESC LIMIT 1";
		//$ejecutarConsulta = $conexion->query($sqlConsulta);
		//$registro = $ejecutarConsulta->fetch_array();
		//$cod = $registro["cod_tab1"];
		
		// Obtener el codigo del último registro con php (Esta línea hace lo mismo que las 4 líneas de arriba)
		$cod = $conexion->insert_id;
		
		// Creando una carpeta para el usuario
		mkdir("./usuarios/$cod", 0777);
		
		// Vamos a grabar en la tabla2
		$sqlGrabacionTab2 = "INSERT INTO tabla2 (cod_tab1, nom_tab2) VALUES ('$cod','$nome')";
		$conexion->query($sqlGrabacionTab2);	
	}
	else
	{}
	
	
?>