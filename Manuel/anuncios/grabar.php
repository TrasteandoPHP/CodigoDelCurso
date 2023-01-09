<?php
	// Recogemos los datos del formulario
	$titulo = $_POST["titulo"]; 
	$mensaje = $_POST["mensaje"]; 
	$foto1 = $_FILES["foto1"]["name"]; 
	$foto2 = $_FILES["foto2"]["name"]; 

	// Conectamos a la BBDD
	$conexion = new mysqli("127.0.0.1","root","","ejemplo1_23");
	
	// SQL para grabar los datos 
	$sqlGrabacionAnuncio = "INSERT INTO anuncios (titulo_anu, mensaje_anu) VALUES ('$titulo', '$mensaje')";
		
	if($conexion->query($sqlGrabacionAnuncio))
	{
		$cod = $conexion->insert_id;
		
		// Creando una carpeta para la primera imagen
		mkdir("./imagenes/$cod", 0777);
		
		// Vamos a grabar la primera imagen
		$sqlGrabacionfoto1 = "INSERT INTO imagenes (cod_anu, imagen_ima) VALUES ('$cod', '$foto1')";
		$conexion->query($sqlGrabacionfoto1);
		$destino = "./imagenes/$cod/$foto1";
		@move_uploaded_file($_FILES["foto1"]["tmp_name"], $destino);

		// Vamos a grabar la segunda imagen	
		$sqlGrabacionfoto2 = "INSERT INTO imagenes (cod_anu, imagen_ima) VALUES ('$cod', '$foto2')";
		$conexion->query($sqlGrabacionfoto2);
		$destino = "./imagenes/$cod/$foto2";
		@move_uploaded_file($_FILES["foto2"]["tmp_name"], $destino);
	}
	else
	{
		echo "Ha ocurrido un error";
	}	
?>