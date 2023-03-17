<?php

	if(isset($_POST["email"]))
	{
		include("./private/funciones.php");
		$ema = $_POST["email"];
		if($reg = hazfetch("alumnos","WHERE email_alu='$ema'"))
		{
			$pasbd = $reg["pass_alu"];
			if(password_verify($_POST["pass"], $pasbd))
			{
				session_start();
				$_SESSION['usuario'] = $reg["cod_alu"];
				header("location:./private/index.php");
			}
			else
			{
				mensaje("Contraeña errónea","index.html");
			}	
		}
		else
		{
			mensaje("Email no existe","index.html");
		}	
	}
	else
	{
		header("location:index.html");
	}	

?>