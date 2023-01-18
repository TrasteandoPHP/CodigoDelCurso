
<?php
$a[1]="Lunes";
$a[2]="Martes";
$a[3]="Miercoles";
$a[4]="Jueves";
$a[5]="Viernes";
$a[6]="Sabado";
$a[7]="Domingo";

$dia="";

echo "<table border='1'>";
$c=1;
echo "<tr>";
echo "<td colspan='7'><center><b>NOVIEMBRE</b></center></td>";
echo "</tr>";
echo "<tr>";
for($k=1;$k<=7;$k++){
	echo  "<td><b>$a[$k]</b></td>";}
	echo "</tr>";
		for($i=1;$i<=5;$i++)
			{ echo "<tr>";
				for($j=1;$j<=7;$j++)
					{
						if($c<31){
							if($j!=7)
							{
								echo "<td><center><b>$c</b></center></td>";
								$c++;
							}
						else
							{
								echo "<td><center><b><font color='red'>$c</font></b></center></td>";
								$c++;
			}
		}
		}
		echo "</tr>";
	}
echo "</table>";
?>