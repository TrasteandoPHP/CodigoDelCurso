<?php
echo "<font color='red'>";
$c=0;
for($i=1;$i<=30;$i++)
	{
	if($c==0)
	{
		echo "<font color='blue'>$i</font>";
		$c=1;
	}
	else
	{
		echo "$i";
		$c=0;
	}
	
	}
echo "</font>";

?>