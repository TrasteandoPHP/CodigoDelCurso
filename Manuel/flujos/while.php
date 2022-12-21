<?php
	//TODO EL FORMULARIO EN php
	//abrir el formulario
	echo"<form action='' method=''>";
	//dentro del form es donde hago el BUCLE
	//inicializamos un contador
	$cont = 1;
	
	while($cont<=10)
	{
		echo"<input type= 'text' name='caja' placeholder='Caja $cont'><br><br>";
		$cont = $cont + 1;	
	}
	echo "<input type='submit' value='Enviar'><br>";
	
	echo"</form>";

?>