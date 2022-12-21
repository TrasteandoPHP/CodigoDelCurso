<?php
	$nombre=$_POST["nombreBD"];
	$conexion = new mysqli("localhost", "root", "", "lunes5");
	
	$nombreEncriptado = base64_encode($nombre);
	
	$sqlConsulta = "SELECT texto_pru FROM pruebas WHERE texto_pru='$nombreEncriptado'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	if($ejecutarConsulta->fetch_array())
	{
		foreach($ejecutarConsulta as $registro)
			{
				$nom = $registro["texto_pru"];
				
				$nomDesencriptado = base64_decode($nom);
				
				if($nomDesencriptado==$nombre)
				{
					echo "Login correcto<br>";
				}
				else
				{
					echo "Login incorrecto<br>";
				}
			}	
		
	}
	else
	{	
		
	   echo "<br>Login incorrecto.<br>";	
		
	}	
?>