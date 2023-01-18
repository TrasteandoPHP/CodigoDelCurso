<?php
$a=1;
$i=0;
for($i=1;$i<=30;$i++){
    if($a==6){
    echo "<b><font color='blue'>$i   </font></b>";
    $i++;
    echo "<b><font color='red'>$i   </font><br></b>";
    $a=1;
            }
    else{
    echo "$i   ";
    $a++;
           }
                    }

$cont=0;                    
echo "<table border='1'>";
for($x=1;$x<=5;$x++)
{
echo "<tr>";
for($j=1;$j<=7;$j++){
    $cont++;
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