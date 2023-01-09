<?php
	// Vamos a recoger los datos que vienen del formulario.
	// !! OJO !! si viene algún tipo de dato FILE, hay que hacerlo de la siguiente manera.
	$fichero = $_FILES["archivo"]["name"]; // También puede ser $fichero = $_FILES["archivo"]["size"];
	$file = $_FILES["archivo"]["tmp_name"];
	
	echo $fichero."<br>";

	$hoy = date("Y-m-d");
	echo $hoy."<br>";
	$ahora = date("H:i:s");	
	echo $ahora."<br>";
	$nombreFichero = $hoy."_".$ahora."_".$fichero;
	echo $nombreFichero."<br>";
	
	$nombreCarpeta = explode(".", $fichero);
	
	var_dump($nombreCarpeta);
	
	mkdir("./usuarios/$nombreCarpeta[0]",0777);
	
	echo "<br>Creada carpeta con nombre <b>$nombreCarpeta[0]</b>";
	
	$destino = "./usuarios/$nombreCarpeta[0]/$fichero"; // Se puede cambiar el nombre del fichero, se puede componer el nombre del fichero concatenando datos al nombre
	
	// Mover el fichero a su sitio
	@move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);	
?>