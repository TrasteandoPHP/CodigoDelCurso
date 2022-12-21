<?php
	// Empezamos la sesión
	session_start();
	
	if(isset($_SESSION["pegatina"]))
	{
		$codigoUsuario = $_SESSION["pegatina"];
		
		// Para sacar el día del sistema utilizamos lo siguiente:
		$hoy = date("Y-m-d");

		// Para sacar la hora del sistema utilizamos lo siguiente:
		$ahora = date("H:i:s");
		
		// Para capturar la IP utilizamos lo siguiente:
		$ip = $_SERVER["REMOTE_ADDR"];		
		
		// Grabamos codigoUsuario, fecha y hora de acceso 
		$conexion = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
		$sqlGrabacion = "INSERT INTO accesos (cod_usu, dia_ace, hora_ace, ip_ace) VALUES ('$codigoUsuario','$hoy','$ahora', $ip)";
		$conexion->query($sqlGrabacion);
		
		echo "Login correcto";
	}
	else
	{
		echo "No tienes permisos para estar aquí";
		echo "<br><br><button onclick='window.location.href=`./login.html`'>Volver</button>";
	}
?>