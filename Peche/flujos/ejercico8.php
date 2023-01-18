<?php
$n="a";
for($i=1; $i<=4;$i++)
{
	echo "<form action='recibe$i.php' method='POST'>";
	for($j=1; $j<=2;$j++)
	{
	echo "<input type='text' name='$n$j' placeholder='dato $j'><br>";
	}
	echo "<input type='submit' value='enviar'><br>";
	echo "</form>";
	echo "<br>";
}


?>