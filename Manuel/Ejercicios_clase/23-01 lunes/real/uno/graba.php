<?php
	//ecoger los datos OJO que me vienen del jquery
	$n = $_POST["nom"];
	$a1 = $_POST["ap1"];
	$a2 = $_POST["ap2"];
	//me conecto
	$conexion = new mysqli("localhost","root","","real");
	$sql ="INSERT INTO clientes (nom_cli, ap1_cli, ap2_cli) VALUES ('$n', '$a1', '$a2')";
	//ejecuto comprobando
	if($conexion->query($sql))
	{
		//grabó
		echo "Grabado";
	}
	else
	{
		//no grabó
		echo "Error en la grabación";
	}	

?>