<?php
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];

    $cmd = escapeshellcmd("comprobar.py $num1 $num2"); 
    $ejecutarCmd = shell_exec($cmd); 
    echo $ejecutarCmd;  

?>
