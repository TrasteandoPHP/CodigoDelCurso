<?php

	function grabar($producto)
	{
		$conexion = new mysqli("10.10.10.108","muevemeelcitroen","grua","bdclase");
		$sql = "INSERT INTO productos (nom_pro) VALUES ('$producto')";
		if($conexion->query($sql))
		{
			$mensaje = "OK";
		}
		else
		{
			$mensaje = "NO OK";
		}	

		return $mensaje;
	}

	function recibe_array($datos)
	{
		$arrayrespuestas = array();	
		foreach($datos as $dato)
		{
			$respuesta =  grabar($dato);
			array_push($arrayrespuestas, $respuesta);
		}

		//voy a llamar a una función para que me monte el array que quiero enviar a grabar
		$armontado = a_montar_array($datos,$arrayrespuestas);
		
		return $armontado;
	}

	function a_montar_array($arproductos, $argrabados)
	{
		$arraymontado = array();	
		for($i=0;$i<count($arproductos);$i++)
		{
			$arfila = array($arproductos[$i],$argrabados[$i]);
			array_push($arraymontado,$arfila);
		}
		return $arraymontado;
	}

	function pinta_tabla($loquetengoquepintar)
	{
		echo "<table border=1>
				<tr>
					<th>Producto</th>
					<th>Resultado Operación</th>	
				</tr>	
		";
			foreach($loquetengoquepintar as $fila)
			{
				echo "<tr>
							<td>$fila[0]</td>
							<td>$fila[1]</td>
						</tr>
				";
			}
		echo "</table>";	
	}


?>