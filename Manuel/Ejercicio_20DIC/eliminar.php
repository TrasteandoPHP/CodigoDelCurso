<html>
	<head>
		<meta charset="UTF-8">
		<title>Eliminar Caracter Concatenación</title>
	</head>
	<body>
		<?php
			// Eliminar caracter de concatenación
			echo "<b>Eliminar último caracter de concatenación</b><br>";
			echo "-------------------------------------------------------<br><br>";
			$variable="";
			for($i=0; $i<12; $i++)
			{
				$variable.="Alfonso@";
			}
			echo $variable;
			echo "<br><br>";	

			$variableSinFinal=substr($variable,0,-1);
			echo $variableSinFinal;
			echo "<br><br>";
			
			// Vamos a "romper" esa variable
			$trozos = explode("@",$variableSinFinal); // Lo convertimos en array
			$cont=1;
			foreach($trozos as $trozitos)
			{
				echo "$cont: $trozitos<br>";
				$cont++;
			}	
			echo "<br>";			
			echo "<hr>";
			echo "<br>";				
		?>
	</body>
</html>