<?php
	$nombre=$_POST["nombreAlumno"];
	$apellidos=$_POST["apellidosAlumno"];
	$nombreEncriptado = base64_encode($nombre);
	$apellidosEncriptado = base64_encode($apellidos);
	//$conexion = new mysqli("10.10.10.199", "todos", "1234", "lunes5");
	$conexion = new mysqli("127.0.0.1", "root", "", "lunes5");
	
	$sqlConsulta = "SELECT nomencri_alu, apeencri_alu FROM alumnos WHERE nomencri_alu ='$nombreEncriptado' AND apeencri_alu = '$apellidosEncriptado'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	//$conexion->query($sqlconsulta)->fetch_array()
	if($ejecutarConsulta->fetch_array())
	{
		foreach($ejecutarConsulta as $registro)
		{
			$nomEncriBD = $registro["nomencri_alu"];
			$apeEncriBD = $registro["apeencri_alu"];
					
			if($nomEncriBD==$nombreEncriptado && $apeEncriBD==$apellidosEncriptado)
			{
				echo "El nombre encriptado <b>$nomEncriBD</b> es igual al nombre encriptado <b>$nombreEncriptado</b> recibido de la BBDD<br>";
				
				echo "Los apellidos encriptados <b>$apeEncriBD</b> son iguales a los apellidos encriptados <b>$apellidosEncriptado</b> recibidos de la BBDD<br><br>";
						
				echo "<b>Este usuario ya existe en la Base de Datos.</b>";
				echo "<br><br>";
				echo "<button onclick='window.location.href=`./formularioAltaAlumnos.html`'>Volver</button>";
			}
			
			else 
			{
				$sqlGrabacion = "INSERT INTO alumnos(nom_alu, ape_alu, nomencri_alu, apeencri_alu) VALUES ('$nombre','$apellidos','$nombreEncriptado','$apellidosEncriptado')";
	
				if($conexion->query($sqlGrabacion))
				{
					echo "Usuario grabado Correctamente<br>";
					echo "<br><br>";
					echo "<button onclick='window.location.href=`./formularioAltaAlumnos.html`'>Volver</button>";		
				}
				else
				{
					echo "Error de grabación. Vuelva a intentarlo...";
					echo "<br><br>";
					echo "<button onclick='window.location.href=`./formularioAltaAlumnos.html`'>Volver</button>";	
				}	
			}
		}
	}		
	else 
	{
		$sqlGrabacion = "INSERT INTO alumnos(nom_alu, ape_alu, nomencri_alu, apeencri_alu) VALUES ('$nombre','$apellidos','$nombreEncriptado','$apellidosEncriptado')";
	
		if($conexion->query($sqlGrabacion))
		{
			echo "Usuario grabado Correctamente<br>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaAlumnos.html`'>Volver</button>";		
		}
		else
		{
			echo "Error de grabación. Vuelva a intentarlo...";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaAlumnos.html`'>Volver</button>";	
		}	
	}				
?>