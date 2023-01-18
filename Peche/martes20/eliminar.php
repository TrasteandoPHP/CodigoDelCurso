<?php
$variable = "";

for($i=0;$i<12;$i++)
{
	$variable.="Alfonso@";
}
echo $variable;
echo "<br>";
$varsinfinal=substr($variable,0,-1);
echo $varsinfinal;
$trozos=explode("@",$varsinfinal);


?>