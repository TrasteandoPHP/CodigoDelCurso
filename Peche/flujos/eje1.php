<?php
$tiempo_inicial = microtime(true);
$c=1;	
do{
	if(($c==7) || ($c==14) || ($c==21) || ( $c==28))
	{
		echo "$c<br>";
	}
	else
	{
		echo "$c";
	}
	$c++;
}while($c<30);
$tiempo_final = microtime(true);
	$tiempo = $tiempo_final - $tiempo_inicial;
	echo "el tiempo es".number_format($tiempo,7);
?>