<?php
	$email = $_POST["email"];
	$pass = $_POST["password"];
	
	$conexion = new mysqli("10.10.10.199","cachimba","pelicano","ejercicio");
	
	$sqlConsulta = "SELECT * FROM usuarios WHERE email_usu='$email'";
	
	$ejecutarConsulta = $conexion->query($sqlConsulta);
	
	if($registro = $ejecutarConsulta->fetch_array())
	{
		$password = $registro["pass_usu"];
		if($password == $pass)
		{
			echo "Login Correcto.";
		}
		else
		{
			echo "Password incorrecto.";
		}
	}
	else
	{
		echo "Email no registrado";
	}
	










?>