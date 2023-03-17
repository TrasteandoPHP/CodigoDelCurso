<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		$codalu = $_SESSION['usuario'];
		if(isset($_POST["pregunta"]))
		{
			include("./funciones.php");
			$pregunta = $_POST["pregunta"];
			
				$hoy = date("Y-m-d");
				$ahora = date("H:i:s");
				if(graba("preguntas","cod_alu, pre_pre, fecha_pre, hora_pre","'$codalu','$pregunta','$hoy','$ahora'"))
				{
					mensaje("Pregunta registrada","index.php");	
				}
				else
				{
					mensaje("Ocurrió un error","crearpregunta.php");	
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