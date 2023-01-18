
<?php
$a[1]="LUNES";
$a[2]="MARTES";
$a[3]="MIERCOLES";
$a[4]="JUEVES";
$a[5]="VIERNES";
$a[6]="SABADO";
$a[7]="DOMINGO";

echo "<table border='1'>";
$c=1;
echo "<tr>";
echo "<td colspan='7'><center><b>NOVIEMBRE</b></center></td>";
echo "</tr>";
echo "<tr>";
for($k=1;$k<=7;$k++){
	echo  "<td><h4><b>$a[$k]</b></h4></td>";}
	echo "</tr>";
	
		for($i=1;$i<=5;$i++)
			{ echo "<tr>";
				for($j=1;$j<=7;$j++)
					{if($c<31)
					{if($j<6)
			{
			echo "<td><center><b>$c</b></center></td>";
			}
			else
			{ 
			if($j==6)
			{
			echo "<td><center><b><font color='blue'>$c</font></b></center></td>";
			}
			if($j==7){
				echo "<td><center><b><font color='red'>$c</font></b></center></td>";
				}
			}
		}
		$c++;
		}
		echo "</tr>";
	}
echo "</table>";
?>