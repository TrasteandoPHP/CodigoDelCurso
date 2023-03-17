<?php

	$cont = $_POST["contador"];
	echo "me llegan $cont ficheros <br>";
	
	for($i=1 ; $i<=$cont ; $i++)
	{
		$nombre = $_FILES["archivo$i"]["name"];
		echo "$nombre <br>";
	}


?>