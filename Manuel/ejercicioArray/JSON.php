<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JSON</title>
    </head>
    <body>
        <?php
            $dias = array("Lunes","Martes","Miercoles","Jueves","Viernes");

            $arrayJsonCodificado = json_encode($dias);

            echo $arrayJsonCodificado."<br>";


            $arrayJsonDecodificado = json_decode($arrayJsonCodificado);

            var_dump($arrayJsonDecodificado)."<br>";
        
        
        
        ?>
    </body>
</html>