<?php
include("conexion.php");


function tabla($b,$c,$tr,$td,$reg)
{$contador=0;
echo "<table border=$b bordercolor='$c'>";

for($i=0;$i<=$tr;$i++)
{
	echo "<tr>";
	for($j=0;$j<=$td;$j++)
	{
		if($contador<1){
		echo "<td>";
		semana($j);
		echo "</td>";
		}
		else{
			$contador++;
			echo "<td>";
			$contador;
			echo "</td>";
		}
}
echo "</tr>";
}
echo "</table>";

}
function semana($d)
{
	switch($d)
	{
		case 0:echo "lunes";break;
		case 1:echo "Martes";break;
		case 2:echo "Miercoles";break;
		case 3:echo "Jueves";break;
		case 4:echo "Viernes";break;
		case 5:echo "Sabado";break;
		case 6:echo "Domingo";break;
		
	}
}


?>