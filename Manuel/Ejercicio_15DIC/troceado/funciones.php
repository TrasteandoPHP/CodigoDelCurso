<?php
	function saludar($nombre)
	{
		echo "Hola $nombre<br>";
	}

	function despedir($nombre)
	{
		echo "Adios $nombre<br>";
	}


	saludar("");
	saludar("Miguel");
	saludar("Pepito");
	despedir("Juanillo");
	
?>