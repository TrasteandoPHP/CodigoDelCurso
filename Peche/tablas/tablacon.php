<?php
$c=1;
$b=1;
echo "<table border='1'>";
for($i=0;$i<=3;$i++)
	{echo "<tr>";///
		for($j=0;$j<=3;$j++)
		{ 
	if($b==4)
	{
	echo "<td><b><font color='red'>$c</font></b></td>";
	$c++;
	$b=1;
	}
	else
	{
	echo "<td>$c</td>";
	$c++;
	$b++;
	}
		}
		echo "</tr>";
		}
echo "</table>";
?>