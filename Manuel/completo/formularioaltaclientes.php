<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<button onclick="window.location.href='./index.html'">INICIO</button>
		<button onclick="window.location.href='./formularioaltaprovincias.html'">ALTA PROVINCIAS</button>
		<button onclick="window.location.href='./formularioaltasexo.html'">ALTA SEXO</button>
		<button onclick="window.location.href='./formularioaltaclientes.php'">ALTA CLIENTES</button>
		<hr>
		<h1>Alta Clientes</h1>
		<form action="grabaclientes.php" method="POST">
			<input type="text" name="nombre_cli" placeholder="nombre..." maxlength=20 required>
			<br><br>
			<input type="text" name="email_cli" placeholder="email..." maxlength=50 required>
			<br><br>
			<input type="password" name="pass_cli" placeholder="password" maxlength=20 required>
			<br><br>
			<input type="number" name="tlf_cli" placeholder="teléfono" required>
			<br><br>
			<!-- Ejemplo input type Radio
			<input type="radio" id="Hombre" name="sexo" value="Hombre">
			<label for="Hombre">Hombre</label><br>
			<input type="radio" id="Mujer" name="sexo" value="Mujer">
			<label for="Mujer">Mujer</label><br>
			<input type="radio" id="Otros" name="sexo" value="Otros">
			<label for="Otros">Otros</label><br><br>
			-->
			<?php
				$conexion = new mysqli("localhost","root","","lunes5");
				$sqlConsultaSexo = "SELECT * FROM sexos";
				$ejecutarSexo = $conexion->query($sqlConsultaSexo);
				foreach($ejecutarSexo as $registroSex)
				{
					$codsex = $registroSex["codigo_sex"];
					$nomsex = $registroSex["nombre_sex"];
					
					echo "<input type='radio' name='sexo' value='$codsex'>$nomsex <br>";
				}			
			?>
			<br>
			<select name="cod_pro" required>
				<?php
					//$conexion = new mysqli("localhost","root","","lunes5");
					$sqlConsultaProvincias = "SELECT * FROM provincias ORDER BY nombre_pro ASC";
					$ejecutar = $conexion->query($sqlConsultaProvincias);
					foreach($ejecutar as $registro)
					{
						$cod_pro = $registro["codigo_pro"];
						$nom_pro = $registro["nombre_pro"];
						echo "<option hidden disabled selected value> -- Elige una Provincia --</option>";
						echo "<option value='$cod_pro'>$nom_pro</option><br>";
					}					
				?>	
			</select>
			
			
			<!--
			<select name="cod_sex">
			-->
				<?php
				//$conexion = new mysqli("localhost","root","","lunes5");
					//$sqlConsultaSexos = "SELECT * FROM sexos";
					//$ejecutar = $conexion->query($sqlConsultaSexos);
					//foreach($ejecutar as $registro)
					//{
						//$cod_sex = $registro["codigo_sex"];
						//$nom_sex = $registro["nombre_sex"];
						//echo "<option hidden disabled selected value> -- Elige un sexo --</option>";
						//echo "<option value='$cod_sex'>$nom_sex</option>";
					//}				
				?>
			<!--		
			</select>
			-->
			
			<input type="submit" value="Grabar">
		</form>
	</body>
</html>