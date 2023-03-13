<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>funciones</title>
        <?php
            include("funciones.php");
        ?>
    </head>
    <body>
        <h1>Selecciona Meses</h1>
        <label for="desde">Desde:</label>
        <select name="desde">
            <option value="">Desde...</option>
            <?php
               rellena_desde();
            ?>
        </select>        
        <label for="hasta">Hasta:</label>
        <select name="hasta">
            <option value="">Hasta...</option>
            <?php                
                rellena_hasta();
            ?>
        </select>
    </body>
</html>