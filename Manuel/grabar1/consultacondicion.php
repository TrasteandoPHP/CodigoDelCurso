<?php
	//recoge datos
	//$variable = $_POST["nombreinput"]
	$nom = "La Coruña";
	
	//Conexión a la BBDD
	$conexion = new mysqli("localhost","root","","rompecabezas");
	
	//Lenguaje SQL de consulta CON CONDICIÓN
	$sql = "SELECT * FROM provincias WHERE nombre='$nom'";
	
	//Vamos a ejecutar la consulta en la BBDD
	$ejecutar = $conexion->query($sql);
	
	//Vamos a preguntarle si es capaz de ordenar los datos en un array con el ejecutar	
	if($ejecutar->fetch_array())
	{
		// Esta es la parte positva, por lo tanto es capaz de hacer un array, por lo tanto hay datos
		foreach($ejecutar as $registro)
		{
			//extraer los datos que quiero
			$cod = $registro["codigo"];
			$nompro = $registro["nombre"];
			
			// Mostrar en pantalla
			echo "$cod - $nompro<br>";
		}
	}
	else
	{
		//Esta es la parte negativa, por tanto NO es capaz de ordenar los datos.
		echo "No existe esa provincia en la tabla";
	}
?>