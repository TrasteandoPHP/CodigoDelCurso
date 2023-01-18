<?php
//vamos a conocer los campos de una tabla
$con = new mysqli("10.10.10.199","Medellin","1234","martes20");
$sql="SHOW COLUMNS FROM personas";
$ejecutar = $con->query($sql);
$todos=array();

foreach($ejecutar as $campo)
{
	array_push($todos,$campo["Field"]);
	//echo $campo["Fields"]."<br>";
	
	
}

var_dump($todos);

echo "<br>";
$cd="";
foreach($todos as $reg)
{
	$cd.="$reg,";
	//echo $cd;


}
$c=substr($cd);

echo $c;
$sql="INSERT INTO personas ($c) VALUES (NULL,'pepe','coruna','coruna','1111','fdsfs@dsf','444444')";

$ejecutar = $con->query($sql);
?>