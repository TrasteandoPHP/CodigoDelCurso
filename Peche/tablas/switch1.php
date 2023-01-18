<?php
$var=$_POST["sexo"];
switch($var)
{
	case 0:
	echo "Es Hombre";
	break;
	case 1:
	echo "Es Mujer";
	break;
	case 2:
	echo "Es Otros";
	break;
	
}

?>