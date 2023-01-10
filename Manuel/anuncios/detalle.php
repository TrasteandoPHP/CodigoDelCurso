<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalle</title>
	</head>
	<body>
		<center>
		<h1>Detalle</h1>
		<hr>	
		
		<?php		
			$codigoAnuncio = $_GET["codigo"];			
			
			$conexion = new mysqli("localhost","root","","ejemplo1_23");
			$sqlConsultaAnuncioPorCodigo = "SELECT * FROM anuncios WHERE cod_anu='$codigoAnuncio'";
			$ejecutarConsultaAnuncioPorCodigo = $conexion->query($sqlConsultaAnuncioPorCodigo);
			
			$registro = $ejecutarConsultaAnuncioPorCodigo->fetch_array();
				$tituloAnuncio = $registro["titulo_anu"];
				$mensajeAnuncio = $registro["mensaje_anu"];
				
				
			// Pintando el título del anuncio
			echo "<h2>$tituloAnuncio</h2><br>";
						
			// Vamos a buscar las imagenes
			$sqlConsultaImagenes = "SELECT * FROM imagenes WHERE cod_anu = '$codigoAnuncio'";
			$ejecutarConsultaImagenes = $conexion->query($sqlConsultaImagenes);
								
			foreach($ejecutarConsultaImagenes as $registroImagen)
			{
				$imagen = $registroImagen["imagen_ima"];
				$ruta = "./imagenes/$codigoAnuncio/$imagen";
				// Pintando las imagenes
				echo "<img src='$ruta' width='800px'><br>";
			}
			
			// Pintando el mensaje del anuncio	
			echo "<h3>$mensajeAnuncio</h3><br>";			
		?>
		
		<hr>
		
		<button onclick="window.location.href='consulta.php'" style="height:40px; width:100px; background-color:red; border-radius:10px"><b>Volver</b></button>
		<br><br>
		</center>	
	</body>
</html>