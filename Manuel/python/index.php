<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
          $nom = "Alfonso";  
          $cmd = escapeshellcmd("prueba.py $nom"); 
          $ejecutarCmd = shell_exec($cmd); 
          echo "<h1>$ejecutarCmd</h1>";       
        ?>
    </body>
</html>