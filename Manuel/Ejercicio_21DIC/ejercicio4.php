<html>
	<head>
		<meta charset="UTF-8">
		<title>Alta Materias</title>
	</head>
	<body>
		<form action="ejercicio4.php" method="POST">
			<h2>Alta Materias</h2>
			<input type="text" name="nombreMateria" placeholder="Escribe el nombre de la materia..." size="20" required>
			<br><br> 
			<input type="submit" value="Grabar Materia">
		</form>	
		<br><hr>

		<?php
			// Ejercicio 4: Con un formulario grabar en tabla materias: Nombre. 
			$conexion = new mysqli("10.10.10.199","alfonso","123456","examen");
			$sqlConsultaCamposBD = "SHOW COLUMNS FROM materias";
			$ejecutarConsultaCamposBDmaterias = $conexion->query($sqlConsultaCamposBD);
			$tabla = "materias";
			$campos="";
			
			foreach($ejecutarConsultaCamposBDmaterias as $c)
			{
				$campos.=$c["Field"].",";
			}
			
			echo "$campos<br>";		
			$campos = substr($campos,0,-1);
			echo "$campos<br>";
			
			// Capturando datos del formulario			
			$nombre = $_POST["nombreMateria"];
			
			$tabla = "materias";
			
			$datos = "'$nombre'";			
			echo "Datos: $datos<br>";	

			$sqlGrabacion= "INSERT INTO $tabla ($campos) VALUES (NULL, $datos)";
	
			if($conexion->query($sqlGrabacion))
			{
				echo "Grabado correctamente";
			}
			else
			{
				echo "Ha ocurrido un error durante la grabación";
			}
			
		?>
	</body>
</html>