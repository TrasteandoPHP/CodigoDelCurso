<?php
	
	// Simulamos la recogida de datos de un formulario
	$email = "pablo";
	
	// Conectarnos a la BBDD
	$conexion = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");					
	$sqlConsultaLogin = "SELECT * FROM usuarios WHERE email_usu='$email'";					
					
	// Ejecutamos la consulta					
	$ejecutarConsulta = $conexion->query($sqlConsultaLogin);
	
	// Se extrae la información del registro encontrado
	$registro = $ejecutarConsulta->fetch_array();	
	
	// Visualizar por pantalla el contenido capturado en $registro
	var_dump($registro);
	echo "<br><br>";
	// Recuperar el password que hay
	$password = $registro["pass_usu"];
	echo "$password<br>";
	echo $registro ["pass_usu"];
	echo "<br>";
	echo '$registro["pass_usu"]';
		
	echo "<br>";
	echo "<br>$registro[0]";
	echo "<br>$registro[1]";
	echo "<br>$registro[2]";
	echo "<br>$registro[3]";
	echo "<br>$registro[4]";
	echo "<br>";
	
	
	echo "<br><br><button onclick='window.location.href=`./index.php`'>Volver</button>";					
?>