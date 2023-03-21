<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	</head>	
	<body>
		<div class="todo">
			
			//OJO ESTO VA A SEr php
			<?php
				include("./php/conexion.php");
				$codigo = $_GET["cod"];
				//creo el sql para realziar la consulta
				$sqlanu = "SELECT * FROM anuncios WHERE cod_anu='$codigo'";
				$ejecutar = $conexion->query($sqlanu);
				$registro = $ejecutar->fetch_array();
				{
					//voy a extraer los datos
					$titulo = $registro["nom_anu"];
					$precio = $registro["precio_anu"];
					$codigo = $registro["cod_anu"];
					//como tengo el código puedo utilziarlo para buscar la imagen de cada anuncio
					$sqlima = "SELECT * FROM imagenes WHERE cod_anu='$codigo'";
					$ejecutaima = $conexion->query($sqlima);
					foreach($ejecutaima as $registroima)
					{
						$imagen = $registroima["nom_ima"];
						$ruta = "./imagenes/$codigo/$imagen";
			?>
					<div class="anuncio">
						<div class="imagen">
							<img src="<?php echo $ruta;?>">
						</div>
						<div class="titulo">
							<h3><?php echo $titulo;?></h3>
						</div>
						<div class="precio">
							<p><?php echo $precio; ?></p>
						</div>
						<div class="boton">
							<button onclick="window.location.href='ver.php?cod=<?php echo $codigo;?>'">Ver</button>
						</div>
					</div>	
			
			<?php
					}
				}	
			?>			
		</div>
	</body>
</html>	