<?php
echo "<form action='text' method='POST'>";
//inicializamos un contador
$c=1;
$nom="num";
	while($c<=10)
		{
		echo "<input type='text' name='caja$c' placeholder='ingrese el numero $c'>"; 
		echo "<br>";
	$c++;
		}
echo "</form>";
?>


