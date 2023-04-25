<?php

	$fechaActual = date('Y-m-d');
	$fechaActual = explode("-",$fechaActual);                        
    $fechaActual = $fechaActual[2]."-".$fechaActual[1]."-".$fechaActual[0];	
	
	$fechaHoy = new DateTime($fechaActual);
	
	$fechaPrevista = new DateTime('22-04-2023');
	
	var_dump($fechaActual);
	echo "..........................";
	var_dump($fechaHoy);
	
	echo "<br>-------------------------------------";
	
	if($fechaHoy<=$fechaPrevista){
		echo "<p style='color:green'>Aún estas en plazo de devolución</p>";
	} else {
		echo "<p style='color:red'>Estas fuera de plazo de devolución";
	}

?>