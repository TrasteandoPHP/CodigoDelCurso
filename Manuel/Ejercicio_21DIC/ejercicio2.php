<html>
	<head>
		<meta charset="UTF-8">
		<title>Alta Empleados</title>
	</head>
	<body>
		<form action="ejercicio2.php" method="POST">
			<h2>Alta Empleados</h2>
			<input type="text" name="nombrepersona" placeholder="Escribe tu nombre..." size="20" required>
			<br><br> 
			<input type="text" name="apellidospersona" placeholder= "Escribe tus apellidos..." size="30" required>
			<br><br>
			<input type="text" name="direccionpersona" placeholder= "Escribe tu direccion..." size="50" required>
			<br><br>
			<input type="submit" value="Grabar empleado">
		</form>	
		<br><hr>

		<?php
			// Ejercicio 2: Con un formulario grabar en tabla empleados: Nombre, Apellidos y dirección. 
			$conexion = new mysqli("10.10.10.199","alfonso","123456","examen");
			$sqlConsultaCamposBD = "SHOW COLUMNS FROM empleados";
			$ejecutarConsultaCamposBDempleados = $conexion->query($sqlConsultaCamposBD);
			$tabla = "empleados";
			$campos="";
			
			foreach($ejecutarConsultaCamposBDempleados as $c)
			{
				$campos.=$c["Field"].",";
			}
			
			echo "$campos<br>";		
			$campos = substr($campos,0,-1);
			echo "$campos<br>";
			
			// Capturando datos del formulario			
			$nombre = $_POST["nombrepersona"];
			$apellido = $_POST["apellidospersona"];
			$direccion = $_POST["direccionpersona"];
			$tabla = "empleados";
			
			$datos = "'$nombre','$apellido','$direccion'";			
			echo "$datos<br>";	

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