<?php
$c=$_GET["codigo"];
$ex=explode(",",$c);
echo "<table>";
echo "<form action='update.php' method='POST'>";
$j=0;
$x=0;
for($i=0,$k=0;$i<count($ex);$i++,$k++)
	{
	$i++;
	echo "$ex[$j]<input type='text' name='n$k' value='$ex[$i]'><br>";
	$j+=2;
	}
echo "<input type='submit' value='Actualizar'>";
echo "</form>";
?>