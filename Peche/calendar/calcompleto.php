<?php
$c=1;
$c1=1;
$c2=1;
$a[1]="Lunes";
$a[2]="Martes";
$a[3]="Miercoles";
$a[4]="Jueves";
$a[5]="Viernes";
$a[6]="Sabado";
$a[7]="Domingo";
for($i=1;$i<=12;$i++)
	{echo "<table border='1'>";
	for($j=1;$j<=5;$j++)
	{
		echo "<tr>";
		for($k=1;$k<=7;$k++)
		{
			if($c<=31 && $c2<=4){
			echo "<td>$c</td>";
			}
			else
			{
				if($c2
			echo "<td></td>";
			$c2++;
			}
			$c++;
			
			
		}
		
				echo "</tr>";
				$c2=1;
				
		}
		$c=1;
		echo "</table><br>";
	}


?>