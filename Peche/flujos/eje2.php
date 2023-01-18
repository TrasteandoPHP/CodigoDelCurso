<?php
$tiempo_inicial = microtime(true);
$c=1;
for($i=0;$i<5;$i++)
{
	echo "<br>";
		for($j=1;$j<=7;$j++)
	{
		if($c<=30){
		echo "$c ";
		}
		$c++;
		
	}
}
$tiempo_final = microtime(true);
	$tiempo = $tiempo_final - $tiempo_inicial;
		echo "el tiempo es".number_format($tiempo,7);

?>

