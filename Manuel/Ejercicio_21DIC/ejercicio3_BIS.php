<html>
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio3_BIS</title>
		<style>
			table {
				border:1px solid ;
				border-collapse: collapse;
			}
			th{
				padding:6px;
				background-color:lightgrey;
			}
			td {
				padding: 6px;
			}
			.par {
				background-color:lightgrey;
			}
			
		</style>
	</head>
	<body>
		<?php

			// Ejercicio 3: Consultar todos los datos de la tabla empleados.
			
			// Me conecto a la BBDD
			$conexion = new mysqli("10.10.10.199","alfonso","123456","examen");
			 
			// Consultando todos los datos de la tabla empleados
			$sqlConsultaCamposEmpleados = "SHOW COLUMNS FROM empleados";
			$ejecutarConsultaCamposEmpleados = $conexion->query($sqlConsultaCamposEmpleados);
				 
			// Creando un array vacío
			$campos = array();
			
			// Rellenamos el array con los campos de la tabla empleados
			foreach($ejecutarConsultaCamposEmpleados as $c)
			{
				array_push($campos,$c["Field"]);
			}
			
			// Empezar una tabla
			echo "<table border=1>";
			
			// Empezamos la fila del encabezado
			echo "<tr>";
			
			// Rellenamos la fila de encabezado con los datos del array.
			foreach($campos as $encabezado)
			{
				echo "<th><center><font color:'red'>$encabezado</font></center></th>";
			}
			echo "</tr>";
			
			// Se consultar los registros de los empleados de la tabla
			$sqlRegistro = "SELECT * FROM empleados";
			$ejecutarSqlRegistros = $conexion->query($sqlRegistro);
			
			// Hacemos el bucle
			foreach($ejecutarSqlRegistros as $registro)
			{
				echo "<tr class='par'>";
				foreach($campos as $campo)
				{
					echo "<td>$registro[$campo]</td>";
				}
				echo "</tr>";
			}
		?>		
	</body>
</html>