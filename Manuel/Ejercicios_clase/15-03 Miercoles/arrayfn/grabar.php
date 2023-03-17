<?php
	include("funciones.php");
	$datos = array();
	$bien = 0;
	for($i=1;$i<=$_POST["lineas"];$i++)
	{
		if($_POST["caja$i"]!="")
		{
			$bien++;
			array_push($datos, $_POST["caja$i"]);
		}

	}

	$resultado = recibe_array($datos);
	// pinta_tabla(recibe_resultado($datos));
	pinta_tabla($resultado);


?>