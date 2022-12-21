<?php

     // Vamos a conocer los campos de una tabla.
	 echo "Consultar los campos de una base de datos<br>";
	 echo "---------------------------------------------------<br>";
	 $conexion = new mysqli("10.10.10.199","Medellin","1234","martes20");
	 $tabla ="personas";
	 $datos = array("Manuel, A Coruña, De la Coru, 15000, Manuel@manuel.coru, 1234");
	 
	 $sqlConsultaCamposBD = "SHOW COLUMNS FROM personas";
	 
	 $ejecutarConsultaCamposBD = $conexion->query($sqlConsultaCamposBD);
	 $camposBD = array();
	 $stringCamposBD="";
	 foreach($ejecutarConsultaCamposBD as $campo)
	 {
		 echo $campo["Field"]."<br>";
		 array_push($camposBD,$campo["Field"]);
		 $stringCamposBD.=$campo["Field"].", ";
	 }
	$val=""; 
	foreach($datos as $d)
	{
		$val.="'$d',";
	} 
	echo $val;
	echo "<br>";
	var_dump($camposBD);
	echo "<br><br>";
	echo $stringCamposBD;
	$campos = substr($stringCamposBD,0,-2);
	echo "$campos<br>";
	$valores=substr($val,0,-2);
	echo "$valores<br>";
	$sqlGrabacion = "INSERT INTO $tabla ($campos) VALUES (NULL, $valores)";
	
	if($conexion->query($sqlGrabacion))
		{
			echo "Grabado correctamente";
		}
		else
		{
			echo "Ha ocurrido un error durante la grabación";
		}

?>