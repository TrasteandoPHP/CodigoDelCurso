
<?php
	//recoger los datos que vienen del Jquery
	$palabra = $_POST["dato"];
	//me conecto a la base de datos
	$conexion = new mysqli("localhost","root","","real");
	//sql con condición
	$sql = "SELECT * FROM clientes WHERE nom_cli LIKE '%$palabra%'";
	//ejecutamos
	$ejecutar = $conexion->query($sql);
	if($ejecutar->fetch_array())
	{	
		//bucle
		foreach($ejecutar as $registro)
		{
			$nom = $registro["nom_cli"];
			$ap1 = $registro["ap1_cli"];
			$ap2 = $registro["ap2_cli"];
			echo "$nom $ap1 $ap2 <br>";
		}
	}
	else
	{
		echo "No hay coincidencias";
	}	

?>