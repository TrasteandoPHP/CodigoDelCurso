<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		$codalu = $_SESSION['usuario'];
		if(isset($_POST["pregunta"]))
		{
			include("./funciones.php");
			$pregunta = $_POST["pregunta"];
			$respuesta = $_POST["respuesta"];
			
				$hoy = date("Y-m-d");
				$ahora = date("H:i:s");
				if(graba("respuestas","cod_pre, cod_alu, res_res, fecha_res, hora_res","'$pregunta','$codalu','$respuesta','$hoy','$ahora'"))
				{
					mensaje("Respuesta registrada","vertema.php?cod=$pregunta");	
				}
				else
				{
					mensaje("Ocurrió un error","vertema.php?cod=$pregunta");	
				}	
				
			
		}
		else
		{
			header("location:./../index.html");
		}
	}
	else
	{
			header("location:./../index.html");
	}		

?>