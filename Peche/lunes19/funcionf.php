<?php
function fecha($m)
{//$fecha = date("Y-m-d");
	//$fec=explode("-",$fecha);
	
	$dm=array("mes","enero","febrero","marzo","abril","mayo","junio","julio","agosto","setiembre","octubre","noviembre","diciembre");
	//echo "dia ".$fec[2]."de ".$dm[$fec[1]]."de ".$fec[0];
	return $dm[$m];
}
?>