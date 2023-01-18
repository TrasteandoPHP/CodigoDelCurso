<?php
$n1 =$_POST["num1"];
$n2 =$_POST["num2"];
$sum = $n1 + $n2;
if($sum>5)
{
	echo "Es mayor";
}
else
{
echo "Es menor";
}
?>