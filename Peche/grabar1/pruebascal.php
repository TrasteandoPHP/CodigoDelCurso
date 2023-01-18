<?php
$a=1;
for($i=1;$i<=4;$i++)
	{
		for($j=1;$j<=10;$j++)
		{
			if($j%5!=0)
			{
			echo "$j ";
			}
			else
			{
			if($a==6)
			{
				echo "**";
				$a=0;
			}
			else{
				echo "$j<br>";
				}
		}
			$a++;
			}
	echo $a;
	}
?>