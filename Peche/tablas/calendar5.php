<?php
echo "<table border='1'>";
$k=1;
for($i=1;$i<=5;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=7;$j++)
		{
					echo "<td>$k<td>";
			$k++;
		}
		echo "</tr>";
	}
echo "</table>";

$cont=0;                    
echo "<table border='1'>";

for($x=1;$x<=5;$x++){
echo "<tr>";
for($j=1;$j<=7;$j++){
    $cont++;
   // if($j==7){
     //   echo "<font color='red'>$cont</font>";
   // }
    if($cont<=30){
echo  "<td>$cont</td>";
    }
    else{
        echo  "<td>  </td>";
    }
}
echo "</tr>";
}
  echo "</table>";
  
  




?>