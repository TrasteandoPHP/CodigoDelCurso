<?php

//tengo que recibir el dni OK
//conectarme a la BD OK
//tengo que buscar ese dni en alumnos (veo si exsite) OK
//si existe saco el código, caso contrario mensaje OK
//tengo que sacar fecha y hora del sistema OK
//tengo que comprobar el último registro de hoy de ese alumno en registros OK
//si no existe grabaré una entrada OK
//si existe tengo que saber qué tipo hay (entrada o salida) y grabar el contrario OK

	$dni = $_POST["dni"];
	$conexion = new mysqli("localhost","root","","ensal"); 
	$buscaal = "SELECT * FROM alumnos WHERE dni_alu='$dni'";
	$ejbuscaal = $conexion->query($buscaal);
	if($registroal = $ejbuscaal->fetch_array())
	{
		//hemos encontrado el dni
		$codigoal = $registroal["cod_alu"];
		$hoy = date("Y-m-d");
		$ahora = date("H:i:s");
		$buscareg = "SELECT * FROM registros WHERE cod_alu='$codigoal' AND fecha_reg='$hoy' ORDER BY cod_reg DESC";
		$ejbuscareg = $conexion->query($buscareg);
		if($registroreg= $ejbuscareg->fetch_array())
		{
			//existe tengo que saber qué tipo hay
			$tiporeg = $registroreg["tipo_reg"];
			if($tiporeg == "Entrada")
			{
				$tipo = "Salida";	
			}
			else
			{
				$tipo = "Entrada";
			}	
		}
		else
		{
			//se tiene que grabar un dato
			$tipo = "Entrada";
		}	
		//se tiene que grabar en registros esto:
		$grabareg = "INSERT INTO registros (cod_alu, fecha_reg, hora_reg, tipo_reg) VALUES ('$codigoal','$hoy','$ahora','$tipo')";
		if($conexion->query($grabareg))
		{
			echo "
				<script>
					alert('$tipo registrada');
					window.location.href='index.html';
				</script>
			";
		}
	}
	else
	{
		//no aparece el dni
		echo "<script>
				alert('DNI no existe');
				window.location.href='index.html';
		</script>";
	}




?>