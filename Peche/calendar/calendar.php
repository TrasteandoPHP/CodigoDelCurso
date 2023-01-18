<?php
$a=1;
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
?>