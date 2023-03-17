<?php

	if(isset($_POST["email"]))
	{
		include("./private/funciones.php");
		$ema = $_POST["email"];
		if(hazfetch("alumnos","WHERE email_alu='$ema'"))
		{
			mensaje("Usuario ya existe","index.html");
		}
		else
		{
			$pas = password_hash($_POST["pass"], PASSWORD_DEFAULT);
			$nom = $_POST["nombre"];
			$hoy = date("Y-m-d");
			if(graba("alumnos","nom_alu, email_alu, pass_alu, fecha_alu","'$nom','$ema','$pas','$hoy'"))
			{
				mensaje("registrado, tienes que iniciar sesión","index.html");	
			}
			else
			{
				mensaje("Ocurrió un error","crearcuenta.html");	
			}	
			
		}	
	}
	else
	{
		header("location:index.html");
	}	

?>