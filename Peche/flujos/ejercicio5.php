<?php
$c=1;
for($i=1;$i<=30;$i++)
{
if($c==2){
	echo "<b>$i </b>";
}
else
{
	if($c==4)
	{
		echo "<br>$i ";
		$c=1;
}
else
{
	echo "$i ";
}	
}
$c++;
}
?>