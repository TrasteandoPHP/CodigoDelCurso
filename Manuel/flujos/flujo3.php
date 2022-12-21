<?php
	//Tengo que recoger los datos input del index
	$numero1=$_POST["num1"];
	$numero2=$_POST["num2"];
	$suma = $numero1 + $numero2;
	$multi = $numero1 * $numero2;		
	
	echo "Tu numero1 es <b>$numero1</b><br>";
	echo "Tu numero2 es <b>$numero2</b><br>";
	echo "la suma de <b>$numero1</b> mas <b>$numero2</b> es <b>$suma</b><br>";
	echo "la multiplicación de <b>$numero1</b> por <b>$numero2</b> es <b>$multi</b><br>";
	
	if($multi==100)		
	{
		echo"igualitos";
	} 
	else 
	{
		if($multi>100)
		{
			echo "la multiplicacion es superior a 100";
		}
		else
		{
			echo "la multiplicacion es inferior a 100";
		}
	}
?>
