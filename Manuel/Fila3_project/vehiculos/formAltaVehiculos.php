<?php
    if(isset($_POST["matricula"])) {
        $marcaVehiculo = $_POST["marca"];
        $matriculaVehiculo = $_POST["matricula"];
        $conexion = new mysqli("10.10.10.199","fila3","fila3","fila3");
        $sqlGrabacionVehiculo = "INSERT INTO vehiculos(mar_veh, mat_veh) VALUES ('$marcaVehiculo','$matriculaVehiculo')";
        if($conexion->query($sqlGrabacionVehiculo)){
            echo "
                <script>
                    alert('Vehículo registrado correctamente.');
                    window.location.href='./altavehiculos.php';
                </script>
            ";       
                
        } else { 
                
            echo "
                <script>
                    alert('Error durante la grabación. Inténtelo de nuevo');
                    window.location.href='./altavehiculos.php';
                </script>
            ";       
                
        }
    } else {
?>
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
                    <div class="offset-1 col-10 text-center">
                    <?php
                        include("./../menu.html");
                    ?>
                    <h1>Alta Vehículos</h1> 
                    <form action="" method="POST">
                        <input class="col-3 p-1"type="text" name="marca" id="">
                        <input class="col-3 p-1"type="text" name="matricula" id="">
                        <input class="col-2 btn btn-success mb-1"type="submit" value="Grabar">
                    </form>
                    <br><br>   
                    <h1 class="text-center mt-5 pb-3">Asignación Vehículo</h1>
                    <form class="text-center" action="./asignacionVehiculo.php" method="POST">
                        <select class="float-start offset-2 col-4 text-center p-1" name="empleado" required>
                            <option value="">Elige un Empleado</option>
                            <?php
                                $conexion = new mysqli ("10.10.10.199","fila3","fila3","fila3");
                                $sqlConsultaEmpleados = "SELECT * FROM empleados";
                                $ejecutarSqlConsultaEmpleados = $conexion->query($sqlConsultaEmpleados);
                                foreach($ejecutarSqlConsultaEmpleados as $registro){
                                    $codigoEmpleado = $registro["cod_emp"];
                                    $nombreEmpleado = $registro["nom_emp"];
                                    echo "<option value='$codigoEmpleado'>$nombreEmpleado</option>";
                                }                        
                            ?>
                        </select>
                        <select class="float-start col-4 text-center p-1" name="vehiculo" required>
                            <option value="">Elige un Vehículo</option>
                            <?php
                                $conexion = new mysqli ("10.10.10.199","fila3","fila3","fila3");
                                $sqlConsultaVehiculos = "SELECT * FROM vehiculos";
                                $ejecutarSqlConsultaVehiculos = $conexion->query($sqlConsultaVehiculos);
                                foreach($ejecutarSqlConsultaVehiculos as $registro){
                                    $codigoVehiculo = $registro["cod_veh"];
                                    $nombreVehiculo = $registro["mar_veh"];
                                    $matriculaVehiculo = $registro["mat_veh"];
                                    echo "<option value='$codigoVehiculo'>$nombreVehiculo - $matriculaVehiculo</option>";
                                }                        
                            ?>                        
                        </select>
                        <br><br>
                        <input type="submit" class="btn btn-success col-8 my-3" value="Registrar">
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>

<?php
    }
?>

