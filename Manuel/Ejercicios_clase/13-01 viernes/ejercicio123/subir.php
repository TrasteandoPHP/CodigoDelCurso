<?php

	//vamos a recoger los datos que vienen del formulario. OJO si viene algún tipo de dato file, hay que hacerlo de la siguiente manera
	
	//para recoger el nombre del fichero:
	
	$fichero = $_FILES["archivo"]["name"];
	
	echo $fichero;
	
	$hoy = date("Y-m-d");
	$ahora = date("H:i:s");
	
	$nombrefichero = $hoy."_".$ahora."_".$fichero;
	
	
	$trozos = explode(".",$fichero);

	mkdir("./ficheros/$trozos[0]",0777);
	
	$destino = "./ficheros/$trozos[0]/$nombrefichero";
	
	//mover el fichero a su sitio
	@move_uploaded_file($_FILES["archivo"]["tmp_name"],$destino);
	
	



?>