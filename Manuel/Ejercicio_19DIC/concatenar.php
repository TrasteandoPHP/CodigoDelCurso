<html>
	<head>
		<meta charset="UTF-8">
		<title>Concatenar</title>
	</head>
	<body>
		<?php
			// Concatenar simple
			echo "<h4>Concatenar<h4>";
			
			echo "<hr>";
			// ----------------------------------------------------------------------------------------	
			// Concatenar simple
			echo "<b>Concatenar simple</b><br>";
			echo "--------------------------------------------<br><br>";
			$variable1 = "Hola";
			$variable2 = " Pepito";
			$concatenado1 = "$variable1 $variable2";
			$concatenado2 = $variable1.$variable2;
			$concatenado3 = $variable1." ".$variable2;
			echo $variable1."<br>";
			echo $variable2."<br>";
			
			echo $concatenado1."<br>";
			echo $concatenado2."<br>";
			echo $concatenado3."<br>";
			echo "<br>";
			$nom ="Yo ";
			$ape="Mismo ";
			
			
			echo'
				<form action="" method="">
				<input type="text" value="'.$nom.'" name="" placeholder="">
				<input type="text" value="'.$ape.'" name="" placeholder="">
			';
			
			echo "<hr>";
			// Concatenado especial
			echo "<b>Concatenar especial</b><br>";
			echo "--------------------------------------------<br><br>";
			$var="";
			for($i=0; $i<10; $i++)
			{
				$var.="Hola@";
			}
			echo var_dump($var);
			echo "<br><br>";			
			// Vamos a "romper" esa variable
			$trozos = explode("@",$var); // Lo convertimos en array
			$cont=1;
			foreach($trozos as $trozitos)
			{
				echo "$cont: $trozitos<br>";
				$cont++;
			}	
			echo "<br>";	
			echo $trozos[2];	
			
			echo "<hr>";
			// Ejercicio
			echo "<b>Ejercicio</b><br>";
			echo "--------------------------------------------<br><br>";
			// Dada la variable fecha, se necesita:
			// 1.- Que se imprima la fecha correctamente.
			// 2.- Una función que imprima dia 19 de Diciembre de 2022	
			$fecha = date("Y-m-d");
			echo $fecha;
			echo "<br>";
			
			include ("./funcionFecha.php");
			
			$trocearFecha=explode("-",$fecha);
			//var_dump($trocearFecha);
			$dia=$trocearFecha[2];
			echo "<br>".$dia;
			$mes=$trocearFecha[1];
			echo "<br>".$mes;
			$año=$trocearFecha[0];
			echo "<br>".$año;
			echo "<br><br>";
			echo "Funcion pintaFecha muestra la fecha correctamente sacando el nombre del mes de un switch<br><br>";
			echo pintaFecha($dia,$mes,$año);
			echo "<br>-------------------------------------------------------------------------------------------------------------------------------------<br>";
			echo "Funcion fechaHoy muestra la fecha correctamente sacando el nombre del mes de un array<br><br>";
			echo fechaHoy($dia,$mes,$año);
		?>
	</body>
</html>