<?php
$sex=$_POST["sexo"];
switch ($sex)
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
	}
?>