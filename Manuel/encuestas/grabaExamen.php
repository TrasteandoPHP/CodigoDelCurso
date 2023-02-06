<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Examen</title>
    </head>
    <body>
        <?php
            for($i=1; $i<=10; $i++){
                $preguntas = $_POST["pregunta$i"];
                echo $preguntas."<br>";
            }       
        ?>        
    </body>
</html>