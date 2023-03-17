<?php
	if(isset($_POST["email"]))
	{
		include("./funciones.php");
		//recibimos datos
		$ema = $_POST["email"];
		$pas = $_POST["contrasena"];
		
		$guardar = existe("administradores","WHERE email_adm='$ema' AND pass_adm='$pas'");
		if($guardar)
		{
			//se encontraron datos
			//crear sesion
			session_start();
			$codadm = $guardar["cod_adm"];
			$_SESSION["admin"] = $codadm;
			echo "bien";			
		}
		else
		{
			//no hay conicidencia
			echo "mal";
		}
	}
	else
	{
		
	}	


?>