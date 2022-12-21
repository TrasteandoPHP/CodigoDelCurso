<html>
	<head>
		<meta charset="UTF-8">
		<title>Array 2</title>
		<style>
			table, td, th {
			border:1px solid ;
			}

			table {
			border-collapse: collapse;
			}
		</style>
	</head>
	<body>
		<?php
			// Arrays de 2 dimensiones
			echo "<h4>Array de 2 dimensiones<h4>";
			
			echo "<hr>";
			// ----------------------------------------------------------------------------------------			
			$alumno1= array("Pablo","Gesto","Silla1");
			$alumno2= array("Javier","Anton","Silla2");
			$alumno3= array("Dino","Nuñez","Silla3");
			
			$clase = array($alumno1, $alumno2, $alumno3);
			$clase[0][1];
			$clase[1][2];			
			
			// Sacando datos de un array de 2 dimensiones con un bucle for....
			echo "<b>Extrayendo datos con un bucle for</b><br>";
			echo "--------------------------------------------<br><br>";
			echo "<table border=1>";
			echo "<caption>Tabla Alumnos</caption>";
			echo "<tr><th>&nbsp&nbspNombre&nbsp&nbsp</th><th>&nbsp&nbspApellido&nbsp&nbsp</th><th>&nbsp&nbspPosición&nbsp&nbsp</th></tr>";
			
			for($i=0; $i<3;$i++)
			{
				echo "<tr>";
				for($j=0;$j<3;$j++)
				{				
					echo "<td>";
					echo "<center>".$clase[$i][$j]."</center>";
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";		
			echo "<br><hr>";
			
			// Sacando datos de un array de 2 dimensiones con un bucle foreach
			// ----------------------------------------------------------------------------------------
			echo "<b>Extrayendo datos con un bucle foreach</b><br>";
			echo "--------------------------------------------------<br><br>";
			foreach($clase as $persona)
			{
				//echo $persona;
				foreach ($persona as $personita)
				{
					echo $personita." ";
				}
				echo "<br>";
			}
			echo "<br><hr>";
			// ----------------------------------------------------------------------------------------			
		?>
	</body>
</html>