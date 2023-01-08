<?php
	$nombre=$_POST["nombre"];
	$apellidos=$_POST["apellidos"];
	$email=$_POST["email"];

	$conexion = new mysqli("127.0.0.1", "root", "", "centro_estudios");
	
	$sqlConsulta = "SELECT * FROM profesores WHERE mail_prof ='$email'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	//$conexion->query($sqlconsulta)->fetch_array()
	if($ejecutarConsulta->fetch_array())
	{
		//echo "<b>Este profesor ya existe en la Base de Datos.</b>";
		//echo "<br><br>";
		//echo "<button onclick='window.location.href=`../formAltaProfesores.html`'>Volver</button>";

		echo'<script type="text/javascript">
    				alert("Este Profesor ya existe en la Base de Datos");
    				window.location.href="../formularios/formAltaProfesores.html";
   				 </script>';
	}
	else 
	{
		$sqlGrabacion = "INSERT INTO profesores(nom_prof, ape_prof, mail_prof) VALUES ('$nombre','$apellidos','$email')";
	
		if($conexion->query($sqlGrabacion))
		{
			//echo "Profesor grabado Correctamente<br>";
			//echo "<br><br>";
			//echo "<button onclick='window.location.href=`../formAltaProfesores.html`'>Volver</button>";
			
			echo'<script type="text/javascript">
					alert("Profesor grabado correctamente");
					window.location.href="../formularios/formAltaProfesores.html";   				
   				 </script>';		
		}
		else
		{
			//echo "Error de grabación. Vuelva a intentarlo...";
			//echo "<br><br>";
			//echo "<button onclick='window.location.href=`../formAltaProfesores.html`'>Volver</button>";
			
			echo'<script type="text/javascript">
    				alert("Error de grabación. Vuelva a intentarlo...");
    				window.location.href="../formularios/formAltaProfesores.html";
   				 </script>';
		}
	}		
?>