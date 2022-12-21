<?php
	if(isset($_GET["nombre"]))
	{
		$nom = $_GET["nombre"];
		$conexion = new mysqli("10.10.10.199","alfonso","123456","examen");
		$sqlCampos = "SHOW COLUMNS FROM materias";
		$ejecutarConsultaSqlCampos = $conexion->query($sqlCampos);
		$campos = "";
		$arrayDeCampos = array();
		foreach($ejecutarConsultaSqlCampos as $c)
		{
			$campos.= $c["Field"];
			array_push($arrayDeCampos, $c["Field"]);
		}
		$campos = substr($campos,0,-1);
		$sqlGrabacion ="INSERT INTO materias($campos)VALUES(NULL,'$nom')";
		if($conexion->query($sqlGrabacion)){
			echo "Grabado<br>";
			$sqlConsulta = "SELECT * FROM materias";
			$ejecutarSqlConsulta = $conexion->query($sqlConsulta);
			foreach($ejecutarSqlConsulta as $registro)
			{
				foreach($arrayDeCampos as $campoBD)
				{
					echo "$registro[$campoBD]";
				}
				echo "<br>";
			}		
		}
	}
	else
		{
			echo "Introduzca una materia en el campo y pulse el boton";
		}
?>