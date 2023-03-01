<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Visualizar Registros Clicks</title>
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="offset-2 col-8 my-5">

                    <table class="table table-striped">
                        <tr>
                            <th>Botón1</th>
                            <th>Botón2</th>
                            <th>Botón3</th>
                        </tr>
                    </table>    

                    <?php
                        $conexion = new mysqli("localhost","root","","contadorClicks");
                        
                        $sql = "SELECT * FROM botonPulsado WHERE num_bot='1'";
                        $ejecutarSql = $conexion->query($sql);
                        $clicksBoton1 = $ejecutarSql->num_rows;

                        $sql = "SELECT * FROM botonPulsado WHERE num_bot='2'";
                        $ejecutarSql = $conexion->query($sql);
                        $clicksBoton2 = $ejecutarSql->num_rows;

                        $sql = "SELECT * FROM botonPulsado WHERE num_bot='3'";
                        $ejecutarSql = $conexion->query($sql);
                        $clicksBoton3 = $ejecutarSql->num_rows;

                       
                        echo "<div class='alert alert-primary my-4 py-4' role='alert'>El número total de clicks del Boton1 es $clicksBoton1.<br></div>";
                               
                        $ejecutarSql->free_result();
                        $conexion->close();                        
                    ?>
                    
                        
                </div>
            </div>
        </div>        
    </body>
</html>