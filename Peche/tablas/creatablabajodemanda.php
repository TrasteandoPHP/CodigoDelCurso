<?php
$x=$_POST["nf"];
$c=$_POST["nc"];
$d=$_POST["dato"];
$k=$c;
echo "<table border='1'>";
while($x>0){
	echo "<tr>";
	while($c>0)
	{
		echo "<td>$d</td>";
		$c--;
	}
echo "</tr>";
	$c=$k;
$x--;
}
echo "</table>";
?>