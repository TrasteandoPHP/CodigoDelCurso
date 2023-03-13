<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
       
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="offset-4 col-4">
                <?php
                    include("./fn.php");
                    inputVariable(2,'text','nombre','','Introduce Nombre');
                    inputVariable(2,'text','apellidos','','Introduce Apellidos');
                    inputVariable(2,'number','edad','','Introduce edad');
                    inputVariable(2,'email','email','','Introduce email');
                    inputVariable(2,'submit','','Enviar','');
                    inputVariable(2,'button','boton','Boton','');
                    echo "<br><br>";
                    
                    inputVariable(50,'submit','','boton','');
                
                ?>       
                </div>
            </div>
        <div>            
    </body>
</html>