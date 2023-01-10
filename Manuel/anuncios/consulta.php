<html>
	<head>
		<meta charset="UTF-8">
		<title>Anuncios</title>
	</head>
	<body>
		<center>
		<h1>Anuncios</h1>
		<hr>
		<button onclick="window.location.href='index.html'">Publica tu anuncio</button>
		<hr>
		<?php
			$conexion = new mysqli("localhost","root","","ejemplo1_23");
			$sqlConsultaAnuncios = "SELECT * FROM anuncios ORDER BY rand()";
			$ejecutarConsultaAnuncios = $conexion->query($sqlConsultaAnuncios);
			
			foreach($ejecutarConsultaAnuncios as $registro)
			{
				$codigoAnuncio = $registro["cod_anu"];
				$tituloAnuncio = $registro["titulo_anu"];
				
				// Vamos a buscar la imagen
				$sqlConsultaImagen = "SELECT * FROM imagenes WHERE cod_anu = '$codigoAnuncio'";
				$ejecutarConsultaImagen = $conexion->query($sqlConsultaImagen);
				$registroImagen = $ejecutarConsultaImagen->fetch_array();				
				$imagenAnuncio = $registroImagen["imagen_ima"];
				$ruta = "./imagenes/$codigoAnuncio/$imagenAnuncio";
				echo "
					<br>
					<img src='$ruta' width='20%'>
					<br>
					$tituloAnuncio
					<a href='detalle.php?codigo=$codigoAnuncio'>Ver detalle</a>
					<br><br>	
				";
			}		
		?>
		</center>
	</body>
</html>