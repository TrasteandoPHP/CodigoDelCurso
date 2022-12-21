<?php

	function fronteo($n1, $n2)
	{
		$suma = $n1 + $n2;
		return $suma;
	}
	
	function grabar($tabla, $campos, $valores)
	{
		$con = new sqli("","","","");
		$sqlGrabacion = "INSERT INTO $tabla ($campos) VALUES ($valores)";
		return $con->query($sqlGrabacion);
	}
?>