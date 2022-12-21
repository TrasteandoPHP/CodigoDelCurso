<?php
	$nombre=$_POST["nombreForm"];
	$conexion = new mysqli("localhost", "root", "", "lunes5");
	
	$nombreEncriptado = base64_encode($nombre);
	
	$sqlConsulta = "SELECT texto_pru FROM pruebas WHERE texto_pru='$nombreEncriptado'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	if($ejecutarConsulta->fetch_array())
	{
		echo "Este usuario ya existe en la Base de Datos.";
		echo "<br><br>";
		echo "<button onclick='window.location.href=`./formularioaltaPruebas.html`'>Volver</button>";
		
	}
	else
	{	
		$sqlGrabacion = "INSERT INTO pruebas(texto_pru) VALUES ('$nombreEncriptado')";
		
		if($conexion->query($sqlGrabacion))
		{
			echo "Usuario grabado Correctamente<br>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaPruebas.html`'>Volver</button>";		
		}
		else
		{
			echo "Error de grabación. Vuelva a intentarlo...";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioaltasexo.html`'>Volver</button>";	
		}	
	}	

	
	/*-------------------------------------------------------------------------------------------
	$sqlgrabacion = "INSERT INTO pruebas(texto_pru) VALUES ('$nombreEncriptado')";
	
	$ejecutarGrabacion = $conexion->query($sqlgrabacion);

	echo "Grabación Correcta<br>";
	
	$sqlconsulta = "SELECT texto_pru FROM pruebas WHERE texto_pru='$nombreEncriptado'";
	
	$ejecutarConsulta = $conexion->query($sqlconsulta);	
	
	
	foreach($ejecutarConsulta as $registro)
			{
				$nom = $registro["texto_pru"];
				
				$nomDesencriptado = base64_decode($nom);
				
				if($nomDesencriptado==$nombre)
				{
					echo "El usuario es correcto<br>";
				}
				else
				{
					echo "El usuario no es correcto<br>";
				}
			}	
	*/
?>