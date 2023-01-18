<?php
	//recoger los datos referentes al ANUNCIO, LOS DATOSSSSSSSSSSS
	$nomanu = $_POST["nombre"];
	$preanu = $_POST["precio"];
	$desanu = $_POST["descripcion"];
	//llamamos al archico de conexion
	include("./conexion.php");
	//hacemos el sql para grabar en la tabla anuncios
	$sqlanu = "INSERT INTO anuncios (nom_anu,precio_anu,des_anu) VALUES ('$nomanu','$preanu','$desanu')";
	//ejecutamos preguntando
	if($conexion->query($sqlanu))
	{
		//se ha grabado el anuncio. NECESITAMOS SABER EL CÓDIGO.
		$codanu = $conexion->insert_id;
		//vamos a crear la carpeta en donde se van a guardar las imágenes.
		mkdir("./../imagenes/$codanu",0777);
		//vamos con las imágenes:
		//vamos a recoger el contador para poder llevar a cabo la grabación y movimiento de las imágenes
		$contador = $_POST["contador"];
		for($i=1;$i<=$contador;$i++)
		{
			$archivo = $_FILES["archivo$i"]["name"];
			//vamos a hacer el sql para grabar la imagen
			$sqlima = "INSERT INTO imagenes (cod_anu,nom_ima) VALUES ('$codanu','$archivo')";
			//ejecutamos preguntando
			if($conexion->query($sqlima))
			{
				//se gra´ó la img en la tabla. VAMOS A MOVER LA IMAGEN A LA CARPETA
				$ruta = "./../imagenes/$codanu/$archivo";
				@move_uploaded_file($_FILES["archivo$i"]["tmp_name"],$ruta);
				
			}
			else
			{}	
			
		}
		echo"<script>
				alert('Anuncio registrado');
				window.location.href='./../index.html';
			</script>"; 
		
	}
	else
	{
		echo"<script>
				alert('Ocurrió un error, vuelve a intentarlo');
				window.location.href='./../index.html';
			</script>"; 
		
	}
?>


