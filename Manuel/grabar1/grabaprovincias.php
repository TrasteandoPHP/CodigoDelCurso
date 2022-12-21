<?php
	$provincia=$_POST["nprovincia"];
	$conexion = new mysqli("localhost", "root", "", "rompecabezas");
	$sql = "INSERT INTO provincias(nombre) VALUES ('$provincia')";
	//$conexion->query ($sql);
	if($conexion->query ($sql))
	{
		echo "Grabación ejecutada correctamente";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioprovincias.html`'>Volver</button>";
		echo "<br><br>";
		echo "<a href='./formularioprovincias.html'>Volver</a>";
	}
	else
	{
		echo "Error de grabación. Vuelva a intentarlo....";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioprovincias.html`'>Volver</button>";
		echo "<br><br>";
		echo "<a href='./formularioprovincias.html'>Volver</a>";
	}
?>