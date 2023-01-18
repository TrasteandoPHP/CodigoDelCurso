<?php
$_var=$_GET["c"];
switch($_var)
{
	case 'cliente':
		echo "Consulta $_var";
		
		break;	
	case 'producto':
		echo "Consulta $_var";
		break;
	case 'categoria':
		echo "Consulta $_var";
	break;
	default:
	break;
}
?>