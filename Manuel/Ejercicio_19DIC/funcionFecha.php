<?php
	function pintaFecha($dia,$mes,$año)
	{
		switch($mes)
		{
			case 1:
					$nombreMes = "Enero";
					break;
			case 2:
					$nombreMes = "Febrero";
					break;
			case 3:
					$nombreMes = "Marzo";
					break;
			case 4:
					$nombreMes = "Abril";
					break;
			case 5:
					$nombreMes = "Mayo";
					break;
			case 6:
					$nombreMes = "Junio";
					break;
			case 7:
					$nombreMes = "Julio";
					break;
			case 8:
					$nombreMes = "Agosto";
					break;
			case 9:
					$nombreMes = "Septiembre";
					break;
			case 10:
					$nombreMes = "Octubre";
					break;
			case 11:
					$nombreMes = "Noviembre";
					break;
			case 12:
					$nombreMes = "Diciembre";
					break;
		}
			
		$fechaActual = "Hoy es día ".$dia." de ".$nombreMes." de ".$año;
		
		return $fechaActual;
	}
	
	function fechaHoy($dia,$mes,$año)
	{
		$meses=array("array con meses","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		
		$fechaActual = "Hoy es día ".$dia." de ".$meses[$mes]." de ".$año;
		
		return $fechaActual;
		
	}
?>