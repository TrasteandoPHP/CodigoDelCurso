<?php
	$sexo=$_POST["tsexo"];
	$conexion = new mysqli("localhost", "root", "", "lunes5");
	$sqlconsulta = "SELECT nombre_sex FROM sexos WHERE nombre_sex='$sexo'";
	
	$ejecutar = $conexion->query($sqlconsulta);	
	
	if($ejecutar->fetch_array())
	{
		echo "Este sexo ya existe en la Base de Datos.<br>";
		echo "Inserte un tipo de sexo distinto.....";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioaltasexo.html`'>Volver</button>";
		
	}
	else
	{
		$sqlgrabacion = "INSERT INTO sexos(nombre_sex) VALUES ('$sexo')";
		
		if($ejecutar->query(sqlgrabacion))
		{
			echo "Sexo grabado correctamente";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioaltasexo.html`'>Volver</button>";	
		}
		else
		{
			echo "Error de grabación. Vuelva a intentarlo...";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioaltasexo.html`'>Volver</button>";	
		}			
	}		
?>

