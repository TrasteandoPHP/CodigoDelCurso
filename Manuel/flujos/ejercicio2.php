<?php
	for($cont=1;$cont<=30;$cont++)
	{
		if($cont==7||$cont==14||$cont==21||$cont==28)
		{
			echo"$cont <br>";
		}
		else
		{
			echo "$cont ";
		}		
	}	
	
	echo"<br>---------------------------------<br>";
	
	$semana=1;
	for($cont=1;$cont<=30;$cont++)
	{
		if($semana==7)
		{
			echo"$cont<br>";
			$semana=0;
		}
		else
		{
			echo "$cont ";
		}		
		$semana++;		
	}
	
	echo"<br>---------------------------------<br>";
	
	for($cont=1;$cont<=30;$cont++)
	{
		if($cont%7==0)
		{
			echo"$cont ";
		}
		else
		{
			echo "$cont <br>";
		}		
	}	
?>
