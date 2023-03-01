<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Visualizar Registros con While</title>
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="offset-2 col-8 my-5">
                    <?php
                        // Recorrido array consulta con un WHILE. Pero no se puede realizar consulta.
                        $conexion = new mysqli("localhost","root","","contadorClicks");
                        $sql = "SELECT * FROM botonPulsado";
                        $ejecutarSql = $conexion->query($sql);

                        $registros = $ejecutarSql->fetch_assoc();                            
                        var_dump($registros);
                               
                        $ejecutarSql->free_result();
                        $conexion->close();                        
                    ?>
                </div>
            </div>
        </div>        
    </body>
</html>