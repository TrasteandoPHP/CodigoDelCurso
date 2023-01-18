<?php
$fil = $_POST["nfila"];
$col = $_POST["ncolu"];
$dat = $_POST["dato"];
echo "<table border='1'>";
for($i=0;$i<$fil;$i++)
		{echo "<tr>";
		
for($j=0;$j<$col;$j++)
		{
			echo "<td>$dat</td>";
		}

	echo "</tr>";
	}
echo "</table>";


?>