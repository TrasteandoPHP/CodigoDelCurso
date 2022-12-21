<?php
	$provincia=$_POST["nprovincia"];
	$conexion = new mysqli("localhost", "root", "", "lunes5");
	
	$sqlconsulta = "SELECT nombre_pro FROM provincias WHERE nombre_pro='$provincia'";
	
	$ejecutar = $conexion->query($sqlconsulta);	
	
	if(!$ejecutar->fetch_array())
	{
		$sqlgrabacion = "INSERT INTO provincias(nombre_pro) VALUES ('$provincia')";
		
		if(!$ejecutar->query(sqlgrabacion))
		{
			echo "Provincia grabada correctamente";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioaltaprovincias.html`'>Volver</button>";	
		}
		else
		{
			echo "Error de grabación. Vuelva a intentarlo...";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioaltaprovincias.html`'>Volver</button>";	
		}		
	}
	else
	{
		echo "La Provincia ya existe en la Base de Datos.<br>";
		echo "Inserte una provincia distinta...";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioaltaprovincias.html`'>Volver</button>";
	}		
?>