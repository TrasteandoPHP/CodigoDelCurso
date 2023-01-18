<?php
include "funcionf.php";
$fecha = date("Y-m-d");
$fec=explode("-",$fecha);
//echo $fec[2]."-".$fec[1]."-".$fec[0];
echo "<br>";
$mes=$fec[1];
$mf=fecha($mes);
echo $fec[2]."-".$mf."-".$fec[0];


?>