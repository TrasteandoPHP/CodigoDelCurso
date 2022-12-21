<?php

	function operar($n1, $n2) 
	{
		$suma = $n1 + $n2;
		echo "<font size='5'><b>$suma</b></font><br>";
	}

	function mensaje()
	{
		echo "<br>Este es el resultado de la suma: &nbsp";
	}
	
	function pintaBoton($enlace, $texto)
	{
		echo "<button onclick='window.location.href=`$enlace`'>$texto</button> ";
	}
	
	function consultar($tabla, $condicion)
	{
		// Queda pendiente conexion
		// $sqlConsulta = "SELECT * FROM $tabla $condicion";
		// $ejecutarConsulta = $conexion->($sqlConsulta);
		// foreach($ejecutarConsulta as $registro)
		// {
			// $nom = $registro["nombre"];
			// echo "$nom<br>";
		// }
	}

?>