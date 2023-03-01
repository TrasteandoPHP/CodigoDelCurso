<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title>Contador Registros</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="offset-3 col-6 my-5">
                    <?php
                        $conexion = new mysqli("localhost","root","","contadorClicks");
                        $sqlConsultaContadorPulsacionesTotales = "SELECT * FROM botonPulsado";
                        $ejecutarSqlConsultaContadorPulsacionesTotales = $conexion->query($sqlConsultaContadorPulsacionesTotales);
                        $totalClicks = $ejecutarSqlConsultaContadorPulsacionesTotales->num_rows;
                        
                        echo "<div class='alert alert-dark my-4 py-4' role='alert'>El número total de clicks es $totalClicks.<br></div>";

                        $sqlConsultaContadorPulsacionesBoton1 = "SELECT * FROM botonPulsado WHERE num_bot='1'";
                        $ejecutarSqlConsultaContadorPulsacionesBoton1 = $conexion->query($sqlConsultaContadorPulsacionesBoton1);
                        $clicksBoton1 = $ejecutarSqlConsultaContadorPulsacionesBoton1->num_rows;
                       
                        echo "<div class='alert alert-primary my-4 py-4' role='alert'>El número total de clicks del Boton1 es $clicksBoton1.<br></div>";

                        $sqlConsultaContadorPulsacionesBoton2 = "SELECT * FROM botonPulsado WHERE num_bot='2'";
                        $ejecutarSqlConsultaContadorPulsacionesBoton2 = $conexion->query($sqlConsultaContadorPulsacionesBoton2);
                        // $clicksBoton2 = $ejecutarSqlConsultaContadorPulsacionesBoton2->num_rows;
                       
                        // echo "<div class='alert alert-dark my-4 py-4' role='alert'>El número total de clicks del Boton2 es $clicksBoton2.<br></div>"; 

                        
                        if(($clicksBoton2 = $ejecutarSqlConsultaContadorPulsacionesBoton2->num_rows) > 0){
                            // Boton2 tiene registros                            
                            echo "<div class='alert alert-secondary my-4 py-4' role='alert'>El número total de clicks del Boton2 es $clicksBoton2.<br></div>";
                        } else {
                            // Boton2 no tienen registros                            
                            echo "<div class='alert alert-dark my-4 py-4' role='alert'>El botón2 no tiene registros de pulsaciones.<br></div>";
                        }

                        $sqlConsultaContadorPulsacionesBoton3 = "SELECT * FROM botonPulsado WHERE num_bot='3'";
                        $ejecutarSqlConsultaContadorPulsacionesBoton3 = $conexion->query($sqlConsultaContadorPulsacionesBoton3);
                        $clicksBoton3 = $ejecutarSqlConsultaContadorPulsacionesBoton3->num_rows;
                       
                        echo "<div class='alert alert-warning my-4 py-4' role='alert'>El número total de clicks del Boton1 es $clicksBoton3.<br></div>";
                        
                    ?>
                </div>
            </div>
        </div>        
    </body>
</html>

