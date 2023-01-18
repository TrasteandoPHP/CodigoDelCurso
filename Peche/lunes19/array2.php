<?php

$alu1= array("Pablo","Gesto","Silla 1");
$alu2= array("Javi","Anton","Silla 2");
$alu3= array("Dino","Nuñez","Silla 3");

$clase = array($alu1,$alu2,$alu3);
$clase[0][1];
$clase[1][2];

//sacando datos en un bucle
for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo $clase[$i][$j]. " | ";
	}
	echo "<br>";
}
foreach($clase as $persona)
{
	foreach($persona as $pers)
	{
		echo "$pers | ";
	}	
	echo "<br>";
}

?>