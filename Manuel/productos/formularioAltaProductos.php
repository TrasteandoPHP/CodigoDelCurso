<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Formulario Alta Productos</h1>
		<form action="grabaProductos.php" method="POST">
			<input type="text" name="nombreProducto" placeholder="Escribe un Producto..." maxlength=50 required>
			<br><br>
			<textarea type="text" name="descripcionProducto" placeholder="Descripción del Producto..." maxlength=200 required></textarea>
			<br><br>
			<input type="text" name="precioProducto" placeholder="Precio del Producto..." maxlength=6 required>
			<br><br>
			<select name="codigoCat" required>
				<option value=""> -- Seleccione una categoria -- </option> 
				<?php
					//$conexion = new mysqli("localhost","escuela","1234","tienda");
					$conexion = new mysqli("10.10.10.108","escuela","1234","tienda");					
					$sqlConsultaCategorias = "SELECT * FROM categorias ORDER BY nombre_cat ASC";
					$ejecutarConsulta = $conexion->query($sqlConsultaCategorias);
					foreach($ejecutarConsulta as $registro)
					{
						$codCat = $registro["codigo_cat"];
						$nomCat = $registro["nombre_cat"];
						echo "<option value='$codCat'>$nomCat</option><br>";
					}					
				?>	
			</select>
			<input type="submit" value="Grabar">
		</form>
	</body>
</html>












