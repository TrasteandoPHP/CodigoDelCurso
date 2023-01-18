<?php
$c=0;
for($i=1;$i<31;$i++)
{
	$c++;
if($c==1)
{
	echo "$i ";
}
else
{
	if($c==2)
	{
		echo "<b>$i </b>";
	}
	else
	{
	echo "$i <br>";
	$c=0;
	}
}
}
?>