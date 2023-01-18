<?php
function insertar($tabla,$campo,$valores)
{
	$con= new mysqli("10.10.10.199","Medellin","1234","martes20");
	$sql="INSERT INTO $tabla ($campo) VALUES($valores)"; 
	if($con->query($sql))
	{
		echo "grabo bien";
	}	
	else
	{
		echo "no Grabo";
	}

}
function sacarcadena($array1,$array2)
{
	$valp="";
	$valc="";
		foreach($array1 as $ac)
		{		
			$valc.="$ac,";
		}
		foreach($array2 as $ad)
		{
			$valp.="'$ad',";
		}
	$valc=substr($valc,0,-1);
	$valp=substr($valp,0,-1);
 return [$valc,$valp]; 
 }
function consulta()
{$con= new mysqli("10.10.10.199","Medellin","1234","martes20");
	$sqlv="SELECT * FROM personas";
	$consulta=$con->query($sqlv);
	foreach($consulta as $reg)
	{
			//foreach($array1 as $c){
		echo $reg["nom_per"]."<br>";	
			//echo $reg[$c]."<br>";}
	//}
}
}

?>