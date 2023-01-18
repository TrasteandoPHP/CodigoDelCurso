<?php
$c=1;
echo "<table border='1'>";
for($i=0;$i<=3;$i++)
	{echo "<tr>";
		for($j=0;$j<=3;$j++)
		{ 
			echo "<td>$c</td>";
			$c++;
		}
			echo "</tr>";
	}
echo "</table>";
?>