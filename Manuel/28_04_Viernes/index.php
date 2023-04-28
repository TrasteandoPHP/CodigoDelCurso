

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./lib/jQuery-3.6.3.min.js"></script>
        <title>Viernes 28</title>
    </head>
    <body>
        <script> 
            
            //hacer("No me entero de nada");
        
            function hacer(cosa){
                alert(cosa+", no me entero de nada");
            }

        </script>

        <?php
            $nom = "Alfonso";
            echo "<script>hacer('$nom')</script>";

        ?>
        
    </body>
</html>