<html>
	<head>
		<meta charset="UTF-8">		
	</head>
	<body>
		<h1>Login</h1>
		
		<?php
			if(isset($_POST["boton"]))
			{
				// Recoger los datos
				$nom = $_POST["nombre"];
				$ape = $_POST["apellidos"];
				echo "$nom - $ape";	
				// Realizamos la conexión
				// Preparamos consulta
				// Ejecutamos consulta
			}
			else
			{
				echo "rellena el formulario<br><br>";
		?>
				<form action="formASiMismo.php" method="POST">			
					<input type="text" name="nombre" placeholder="Introduzca su nombre..." required>
					<br><br>
					<input type="text" name="apellidos" placeholder="Introduzca sus apellidos..." size="30" required>
					<br><br>
					<input type="submit" value="Enviar" name="boton">
				</form>
		<?php		
			}
				
		?>
		<hr>		
	</body>
</html>