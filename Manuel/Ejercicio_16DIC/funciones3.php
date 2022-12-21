<?php

	function pintaNombreyEdad($name,$year)
	{
		echo "Te llamas $name";
		calculaEdad($year);
		
	}

	function calculaEdad($year)
	{
		$hoy = date("Y");
		$edadHoy = $hoy - $year;
		echo " y tienes $edadHoy de edad.";
	}	
?>