<?php
$a1=$_POST["num1"];
$b1=$_POST["num2"];


function operaciones($a, $b){
	echo "el numero 1 es: $a<br>";
	echo "el numero 2 es: $b<br>";
	echo "La suma es ".$a+$b;
	echo "<br>";
	$m=$a*$b;
	return $m;
}

$m1=operaciones($a1,$b1);
echo "La multiplicacion es:".$m1."<br>";
		if($m1>100)
		{
			echo "Bingo";
		}
		else
		{
			if($m1==100)
			{
				echo "Igual";
			}
				else
				{
				echo "Linea";	
				}
			}
		
		
?>