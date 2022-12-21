<?php
	echo "<h2>Estas en <font color=blue><i>consultaCli</i></font></h2>";
	$comprobar = $_GET["comprobar"];
	
	switch($comprobar){
		case 1: 
			$dni = $_GET["dni"];
			echo "DNI: $dni";
			break;
		case 2: 
			$nombre = $_GET["nombre"];
			$apellido = $_GET["apellido"];
			echo "Nombre: $nombre $apellido";			
			break;
		case 3: 
			$edad = $_GET["edad"];
			$telefono = $_GET["telefono"];
			$sexo = $_GET["sexo"];
			echo "edad: $edad - teléfono: $telefono - sexo: $sexo";
			break;	
		default:
			echo "No hay datos";
	}	
?>