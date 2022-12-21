<?php
	$var=3;
	if($var==0)
	{
		echo"el numero es 0";
	}
	elseif($var==1)
	{
		echo "el numero es 1";
	}
	elseif($var==2)
	{
		echo "el numero es 2";
	}
	elseif($var==3)
	{
		echo "el numero es 3";
	}
	elseif($var==4)
	{
		echo "el numero es 4";
	}
	else
	{
		echo "es un numero mayor de 4";
	}
	
	echo"<br>-------------------------------------------<br>";
	
	$var=4;
	switch ($var)
	{
		case 0:
			echo"es hombre";
			break;			
		case 1:
			echo"es mujer";
			break;
		case 2:
			echo"es otros";
			break;
		default:
			echo"el numero elegido no es valido";
			break;			
	}
	
	
?>