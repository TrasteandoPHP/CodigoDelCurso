<?php	
	function grabarSQL($tabla,$campos,$valores)
	{
		//$conexion = new mysqli("10.10.10.199","Medellin","1234","martes20");
		$conexion = new mysqli("127.0.0.1","root","","martes20");
		$sqlGrabacion = "INSERT INTO $tabla ($campos) VALUES ($valores)";
		
		if($conexion->query($sqlGrabacion))
		{
			echo "Grabado correctamente";
		}
		else
		{
			echo "Ha ocurrido un error durante la grabación";
		}
	}	
?>