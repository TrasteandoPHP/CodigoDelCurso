<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <form action="recibir.php" method="POST">
            <?php
                include("./funciones.php");
                formulario("usuarios");
            ?>
        </form>
    </body>
</html>