<?php
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$direccion=$_POST["direccion"];
	$telefono=$_POST["telefono"];
	$email=$_POST["email"];

	$conexion = new mysqli("127.0.0.1", "root", "", "centro_estudios");
	
	$sqlConsulta = "SELECT * FROM alumnos WHERE mail_alu ='$email'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	//$conexion->query($sqlconsulta)->fetch_array()
	if($ejecutarConsulta->fetch_array())
	{
		//echo "<b>Este usuario ya existe en la Base de Datos.</b>";
		//echo "<br><br>";
		//echo "<button onclick='window.location.href=`../formAltaAlumnos.html`'>Volver</button>";

		echo'<script type="text/javascript">
    				alert("Este Alumno ya existe en la Base de Datos");
    				window.location.href="../formularios/formAltaAlumnos.html";
   				 </script>';
	}
	else 
	{
		$sqlGrabacion = "INSERT INTO alumnos(nom_alu, ape_alu, dir_alu, tlf_alu, mail_alu) VALUES ('$nombre','$apellidos','$direccion','$telefono', '$email')";
	
		if($conexion->query($sqlGrabacion))
		{
			//echo "<b>Alumno grabado correctamente.</b>";
			//echo "<br><br>";
			//echo "<button onclick='window.location.href=`../formAltaAlumnos.html`'>Volver</button>";

			echo'<script type="text/javascript">
					alert("Alumno grabado correctamente");
					window.location.href="../formularios/formAltaAlumnos.html";   				
   				 </script>';		
		}
		else
		{
			//echo "Error de grabación. Vuelva a intentarlo...";
			//echo "<br><br>";
			//echo "<button onclick='window.location.href=`../formAltaAlumnos.html`'>Volver</button>";

			echo'<script type="text/javascript">
    				alert("Error de grabación. Vuelva a intentarlo...");
    				window.location.href="../formularios/formAltaAlumnos.html";
   				 </script>';	
		}
	}		
?>