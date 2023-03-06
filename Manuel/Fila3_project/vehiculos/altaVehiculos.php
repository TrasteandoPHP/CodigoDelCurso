<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            <title>Alta Vehículos</title>
            </head>
            <body>
                <div class="container">                        
                    <div class="row">
                    <div class="offset-2 col-8">
                    <?php
                        include("./../index.html");
                    ?>    
                    <h1 class="text-center my-2 pb-3">Alta Vehículos</h1>
                    <form class="text-center" action="./altaVehiculos.php" method="POST">
                        <select class="float-start offset-2 col-4 text-center" name="empleado" required>
                            <option value="">Elige un Empleado</option>
                        <?php
                            $conexion = new mysqli ("10.10.10.199","fila3","fila3","fila3");
                            $sqlConsultaEmpleados = "SELECT * FROM empleados";
                            $ejecutarSqlConsultaEmpleados = $conexion->query($sqlConsultaEmpleados)
                            /*foreach($ejecutar){

                            }*/
                        
                        ?>    

                        </select>
                        <select class="float-start col-4 text-center" name="vehiculo" required>
                            <option value="">Elige un Vehículo</option>
                        
                        </select>
                        <br><br>
                        <input type="submit" class="btn btn-success col-8 my-3" value="Registrar">
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>
