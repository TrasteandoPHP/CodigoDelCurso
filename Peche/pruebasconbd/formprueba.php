<?php
//echo "<form action='' method=''>";
//<table>
//for($i=1;$i<=7;i++)
//{
//<td><input type="text" name="$i" placeholder=""</td>
//}
//echo "</form>";
$n="";
$a="";
$cp=0;
$ed=0;
$nh=0;
$es=0;

$cont=0;
$nom[1]="Pedro";
$nom[2]="Lina";
$nom[3]="Ainhoa";
//parte conexion
$ser="localhost";
$usu="root";
$pwd="";
$bd="arte";
$con = new mysqli($ser,$usu,$pwd,$bd);
for($i=0;$i<10;i++)
	{
		$v=random_int(0, 3);
	if($v>1)
		$n=$nom['$v'];
		$a=$nom['$v+1'];
	}
	else
	{
		
	}
	}
for()

	$sql="INSERT INTO artistas_callejeros (nombre, apellido, cp, edad, estado, nhijos) VALUES ('$n','$a','$cp','$ed','$es','$nh')";

}	






?>