
<?php
$tiempo_inicial = microtime(true);

for($i=1;$i<=30;$i++)
	{
	if($i%7==0)
		{
		echo "$i<br>";
		}	
		else
		{	
		echo "$i ";
		}
	}
$tiempo_final = microtime(true);
	$tiempo = $tiempo_final - $tiempo_inicial;
		echo "el tiempo es".number_format($tiempo,7);

?>