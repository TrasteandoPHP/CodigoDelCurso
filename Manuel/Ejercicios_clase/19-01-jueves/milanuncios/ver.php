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
				//voy a extraer los datos
				$titulo = $registro["nom_anu"];
				$precio = $registro["precio_anu"];
				$descripcion = $registro["des_anu"];	
					
			?>
			<h3><?php echo $titulo;?></h3>
			<p><?php echo $descripcion;?></p>
			<label><?php echo $precio;?></label>
			<br>
			<br>
			<br>
			<?php
				$sqlima = "SELECT * FROM imagenes WHERE cod_anu='$codigo'";
				$ejecutarima = $conexion->query($sqlima);
				foreach($ejecutarima as $registroima)
				{
					$imagen = $registroima["nom_ima"];
					$ruta = "./imagenes/$codigo/$imagen";
					?>
					
					<img class="imagenesdelanuncio" src="<?php echo $ruta;?>">
					
					<?php
				}
			?>
			
			//HASTA AQUI
			
		</div>
	</body>
</html>	