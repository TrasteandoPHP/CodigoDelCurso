<?php
$tiempo_inicial = microtime(true);
$c=1;
for($i=1;$i<31;$i++)
{
	echo "$i ";
	if($c==7)
	{
	echo "<br>";
		$c=0;
	}
	
	$c++;
}
$tiempo_final = microtime(true);
	$tiempo = $tiempo_final - $tiempo_inicial;
		echo "el tiempo es".number_format($tiempo,7);
?>