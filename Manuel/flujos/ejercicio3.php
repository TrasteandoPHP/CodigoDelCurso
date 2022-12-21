//numeros del 1 al 30
//numeros pares en azul e impares rojo<br>


<?php
	for($cont=1; $cont<=30; $cont++)
	{
		if($cont%2==0)
		{
			echo"<font color='red'>$cont </font><br>";
		}
		else
		{
			echo"<font color='blue'>$cont </font><br>";
		}
	}
	echo"<br>---------------------------------<br>";
	
	$contpar=1;
	for($cont=1;$cont<=30;$cont++)
	{
		if($contpar==2)
		{
			echo"<font color='blue'>$cont </font><br>";

			$contpar=0;
		}
		else
		{
			echo"<font color='red'>$cont </font><br>";

		}		
		$contpar++;	
	}
	
	echo"<br>---------------------------------<br>";
	
	$comodin=0;
	for($cont=1;$cont<=30;$cont++)
	{
		if($comodin==0)
		{
			echo"<font color='red'>$cont </font><br>";

			$comodin=1;
		}		
		else
		{
			echo"<font color='blue'>$cont </font><br>";
			$comodin=0;
		}			
	}
	
	echo"<br>---------------------------------<br>";
	
	$contpar=1;
	for($cont=1;$cont<=30;$cont++)
	{
		if($contpar==1)
		{
			echo"$cont ";
		}
		
		if($contpar==2)
		{
			echo"<b>$cont </b>";
		}
		
		if($contpar==3)
		{
			echo"$cont<br>";
			$contpar=0;
		}		
		$contpar++;	
	}
	
	echo"<br>---------------------------------<br>";
	
	$contpar=0;
	for($cont=1;$cont<=30;$cont++)
	{
		$contpar++;
		if($contpar==1)
		{
			echo"$cont ";
		}
		else
		{
			if($contpar==2)
			{
				echo"<b>$cont </b>";
			}
			else
			{
				echo"$cont<br>";
				$contpar=0;
			}
				
		}
		
	}	
?>