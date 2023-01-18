<?php
$b=0;

for($i=1;$i<=30;$i++)
{
	if($b==0)
	{
		$b=1;
	echo "<font color='blue'>$i</font>";
	}
	else
	{
		echo "<font color='red'>$i</font>";
		$b=0;
	}
	
}


?>