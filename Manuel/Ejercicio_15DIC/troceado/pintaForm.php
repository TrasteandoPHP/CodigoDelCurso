<?php
	function inicioForm($accion, $metodo)
	{
		echo "<form action='$accion' method='$metodo'><br><br>";
	}	
	
	function finForm()
	{
		echo "</form>";	
	}
	
	function pintaInput($tipo, $nombre, $place)
	{
		echo "<input type='$tipo' name='$nombre' placeholder='$place'><br><br>";
	}
	
	inicioForm("graba.php","POST");
	pintaInput("text","nombreCliente","Nombre del Cliente");
	pintaInput("txt","apellidoCliente","Apellidos del Cliente");
	pintaInput("number","edadClient","Edad");
	finForm();
?>