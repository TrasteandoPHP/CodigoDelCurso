<?php
	$nombre=$_POST["nombre"];
	$horas=$_POST["horas"];
	$cod_prof=$_POST["cod_prof"];

	$conexion = new mysqli("127.0.0.1", "root", "", "centro_estudios");
	
	$sqlConsulta = "SELECT * FROM asignaturas WHERE nom_asig ='$nombre'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	//$conexion->query($sqlconsulta)->fetch_array()
	if($ejecutarConsulta->fetch_array())
	{
		//echo "<b>Este asignatura ya existe en la Base de Datos.</b>";
		//echo "<br><br>";
		//echo "<button onclick='window.location.href=`../formAltaAsignaturas.php`'>Volver</button>";

		echo'<script type="text/javascript">
    				alert("Esta Asignatura ya existe en la Base de Datos");
    				window.location.href="../formularios/formAltaAsignaturas.php";
   				 </script>';
	}
	else 
	{
		$sqlGrabacion = "INSERT INTO asignaturas(nom_asig, hor_asig, cod_prof) VALUES ('$nombre','$horas','$cod_prof')";
	
		if($conexion->query($sqlGrabacion))
		{
			//echo "Asignatura grabada Correctamente<br>";
			//echo "<br><br>";
			//echo "<button onclick='window.location.href=`../formAltaAsignaturas.php`'>Volver</button>";
			
			echo'<script type="text/javascript">
					alert("Asignatura grabada correctamente");
					window.location.href="../formularios/formAltaAsignaturas.php";   				
   				 </script>';	
		}
		else
		{
			//echo "Error de grabación. Vuelva a intentarlo...";
			//echo "<br><br>";
			//echo "<button onclick='window.location.href=`../formAltaAsignaturas.php`'>Volver</button>";
			
			echo'<script type="text/javascript">
    				alert("Error de grabación. Vuelva a intentarlo...");
    				window.location.href="../formularios/formAltaAsignaturas.php";
   				 </script>';
		}
	}		
?>