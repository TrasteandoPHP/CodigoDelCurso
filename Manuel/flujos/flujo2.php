<?php
	// Creamos dos variables
	
	$num1 = 6;
	$num2 = 5;
	
	$multi = $num1 * $num2;
	
	//sis anidados
	if($multi>40)
	{
		//esta es la parte positiva
		echo "Es mayor de 40";
	}
	else
	{
		//esta es la parte negativa
		if($multi==40)
		{
			echo "Es igual a 40";			
		} 
		else 
		{
			echo "Es menor de 40";
		}
		
		
	}
	
	
?>