<form action="" method="">

	<input type="text" name="" placeholder="provincia...">
	<select>
		<?php
			$conexion = new mysqli("localhost","root","","rompecabezas");
			$sql = "SELECT * FROM provincias";
			$ejecutar = $conexion->query($sql);
			foreach($ejecutar as $registro)
			{
				$cod = $registro["codigo"];
				$nom = $registro["nombre"];
				echo "<option value='$cod'>$nom</option>";
			}		
		?>	
	</select>
</form>