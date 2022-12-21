<?php
	$nombre_cli=$_POST["nombre_cli"];
	$correo_cli=$_POST["email_cli"];
	$contrasena_cli=$_POST["pass_cli"];
	$telefono_cli=$_POST["tlf_cli"];
	$codigo_pro=$_POST["cod_pro"];
	$codigo_sex=$_POST["cod_sex"];
		
	
	$conexion = new mysqli("localhost", "root", "", "lunes5");
	$sqlconsulta = "SELECT email_cli FROM clientes WHERE email_cli='$correo_cli'";
	
	$ejecutar = $conexion->query($sqlconsulta);	
	
	if($ejecutar->fetch_array())
	{
		echo "Este cliente ya existe en la Base de Datos.";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioaltaclientes.php`'>Volver</button>";
		
	}
	else
	{
		$sqlgrabacion = "INSERT INTO clientes(nombre_cli, email_cli, pass_cli, tlf_cli, codigo_pro, codigo_sex ) VALUES ('$nombre_cli', '$correo_cli', 
		'$contrasena_cli', '$telefono_cli', '$codigo_pro', '$codigo_sex')";
		$ejecutar = $conexion->query($sqlgrabacion);
		echo "Cliente grabado correctamente";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioaltaclientes.php`'>Volver</button>";	
			
	}		
?>