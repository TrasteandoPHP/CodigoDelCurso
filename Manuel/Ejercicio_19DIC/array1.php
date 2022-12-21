<html>
	<head>
		<meta charset="UTF-8">
		<title>Array 1</title>
	</head>
	<body>
		<?php
			// Hasta ahora
			$alumnos1 = "Pablo";
			$alumnos2 = "Javier";
			$alumnos3 = "Dino";
			
			// En vez de utilizar tantas variables....hacemos un contenedor, array
			$alumnos = array("Pablo","Javier","Dino");
			//$alumnos = array($alumno1,$alumno2,$alumno3);
			var_dump($alumnos);
			echo "<br><hr>";			
			// ----------------------------------------------------------------------------------------	
			// Sacar datos del array. Primero uno solo.
			echo "<b>Acceso a datos del array por posición</b><br>";
			echo "---------------------------------------------<br>";	
			echo $alumnos[0]."<br>";
			echo "$alumnos[1]<br>";
			echo $alumnos[2]."<br>";
			//echo $alumnos[3]; // error.
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Sacar los datos con un bucle foreach.
			// Para cada elemento dentro de $alumnos lo voy a conocer como $alumnito.	
			echo "<b>Acceso con Bucle Foreach</b><br>";
			echo "--------------------------------<br>";			
			foreach($alumnos as $alumnito)
			{
				echo $alumnito."<br>"; // Sacamos en pantalla un registro de cada vez, de cada vuelta.
			}
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Sacar los datos con un bucle for
			echo "<b>Acceso con Bucle For</b><br>";
			echo "--------------------------<br>";
			for($i=0; $i<3; $i++)
			{
				echo $alumnos[$i]."<br>";
			} 
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Sacar los datos con un bucle While
			echo "<b>Acceso con Bucle While</b><br>";
			echo "------------------------------<br>";
			$contador=0;
			while($contador<3)
			{
				echo "$alumnos[$contador]<br>";
				$contador++;
			}
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Para saber las posiciones que tiene un array
			echo count($alumnos);
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Sacar los datos con un bucle for con Count()
			echo "<b>Acceso con Bucle For con Count()</b><br>";
			echo "------------------------------------------<br>";
			for($i=0; $i<count($alumnos); $i++)
			{
				echo $alumnos[$i]."<br>";
			} 
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Sacar los datos con un bucle While con Count()
			echo "<b>Acceso con Bucle While con Count()</b><br>";
			echo "---------------------------------------------<br>";
			$contador=0;
			while($contador<count($alumnos))
			{
				echo "$alumnos[$contador]<br>";
				$contador++;
			}
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Crear un array con 4 marcas de coches.
			$coches = array("Seat","Audi","Volkswagen","Skoda");
			// Añadir un elemento a un array
			$coches[] = "Mazda";
			// Añadir uno o varios elementos a un array
			array_push($coches,"Peugeot", "Citroen");
			var_dump($coches);
			echo "<hr>";
			// ----------------------------------------------------------------------------------------
			// Ejercicio: Crear un array con los números del 1 al 100
			$numeros=array(); // Creamos el array vacío
			for ($i=1; $i<=100; $i++)
			{
				array_push($numeros,$i);
			}
			var_dump($numeros);	
			echo "<br><br>";
			echo "<b>Leemos el array con Bucle Foreach</b><br>";
			echo "--------------------------------<br>";	
			foreach($numeros as $numero)
			{
				echo "$numero - ";
			};
			echo "<br><br>";
			echo "<b>Leemos el array con Bucle For</b><br>";
			echo "--------------------------------<br>";	
			for($i=0; $i<count($numeros); $i++)
			{
				echo "$numeros[$i] - ";
			} 
			echo "<hr>";	
		
		?>
	</body>
</html>