<?php
	//recogemos los datos
	$tit = $_POST["titulo"];
	$men = $_POST["mensaje"];
	$img1 = $_FILES["foto1"]["name"];
	$img2 = $_FILES["foto2"]["name"];
	//me conecto a la BD
	$conexion = new mysqli("localhost","root","","ejemplo123");
	//grabamos anuncio
	$sqlanu = "INSERT INTO anuncio (titulo_anu, mensaje_anu) VALUES ('$tit', '$men')";
	//ejecutamos preguntando
	if($conexion->query($sqlanu))
	{
		//sacamos el código que acabamos de grabar
		$cod = $conexion->insert_id;
		//creamos carpeta
		mkdir("./imagenes/$cod",0777);
		//vamos a grabar la primera imagen
		$sqlimg1 = "INSERT INTO imagenes (cod_anu, imagen_ima) VALUES ('$cod','$img1')";
		$conexion->query($sqlimg1);
		$destino = "./imagenes/$cod/$img1";
		@move_uploaded_file($_FILES["foto1"]["tmp_name"],$destino);
		//grabo segunda imagen
		$sqlimg2 = "INSERT INTO imagenes (cod_anu, imagen_ima) VALUES ('$cod','$img2')";
		$conexion->query($sqlimg2);
		$destino = "./imagenes/$cod/$img2";
		@move_uploaded_file($_FILES["foto2"]["tmp_name"],$destino);
		
	}
	else
	{}	
	
	


?>