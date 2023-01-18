
<?php
	$n1 = $_POST["num1"];
	$n2 = $_POST["num2"];
	echo "El numero 1 es $n1<br>";
	echo "El numero 2 es $n2<br>";
	//$s=$n1+$n2;
	$m = $n1*$n2;
		echo "La suma es:".$n1+$n2;
		echo "<br>";
		echo "La multiplicacion es $m<br>";
	
	if($m>100)
	{
			echo "Bingo";
		}
	else
		{
			if($m==100)
				{
					echo "Igualitos";
				}
			else
				{
					echo "Linea";
				}
		}

?>