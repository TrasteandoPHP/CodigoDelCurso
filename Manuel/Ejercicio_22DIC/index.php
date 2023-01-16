<html>
	<head>
		<meta charset="UTF-8">
		<title>Modificar Alumnos</title>
	</head>
	<body>
		<table border=1>
			<tr><th colspan=3>ALUMNOS</th></tr>
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Acción</th>
			</tr>
			<?php
				$conexion = new mysqli("10.10.10.106","clase","1234","jueves22");
				$sqlConsulta = "SELECT * FROM alumnos";
				$ejecutarConsulta = $conexion->query($sqlConsulta);
				foreach($ejecutarConsulta as $registro)
				{
					$cod = $registro["cod_alu"];
					$nom = $registro["nom_alu"];
					$ema = $registro["email_alu"];
					echo "
						<tr>
							<td>$nom</td>
							<td>$ema</td>
							<td><button onclick='window.location.href=`formmodif.php?codigo=$cod&nombre=$nom`'>Modificar</button></td>
						</tr>					
					";
				}			
			?>			
		</table>
	</body>
</html>