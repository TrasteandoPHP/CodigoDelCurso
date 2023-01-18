<?php
$curso = array();
for($cont=0;$cont <10;$cont++)
{
$curso["numero-($cont)"] = $cont;
}

echo count($curso);
$curso["numero-10"]= 10;
echo "<br>";
echo count($curso);
var_dump($curso);
?>