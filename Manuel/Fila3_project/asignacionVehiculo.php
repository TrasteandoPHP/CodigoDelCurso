<?php
    $codigoEmpleado = $_POST["empleado"];
    $codigoVehiculo = $_POST["vehiculo"];
    $fecha = date("Y-m-d");
    $conexion = new mysqli ("10.10.10.199","fila3","fila3","fila3");
    $sqlGrabacionAsignacionVehiculo = "INSERT INTO asignaciones(cod_emp, cod_veh, fecha_asi) VALUES ('$codigoEmpleado','$codigoVehiculo','$fecha')";
    if($conexion->query($sqlGrabacionAsignacionVehiculo)){
        echo "
                <script>
                    alert('Asignación de Vehículo registrada correctamente.');
                </script>
            ";    
           
        $sqlActualizacionEstadoEmpleado = "UPDATE empleados SET est_veh='1' WHERE cod_emp='$codigoEmpleado'";        
        
        if($conexion->query($sqlActualizacionEstadoEmpleado)){
            $sqlActualizacionEstadoVehiculo = "UPDATE vehiculos SET est_veh='1' WHERE cod_veh='$codigoVehiculo'";
                if($conexion->query($sqlActualizacionEstadoVehiculo)){
                    echo "
                    <script>
                        window.location.href='./altaVehiculos.php';
                    </script>
                ";      

                } else {
                    echo "
                        <script>
                            alert('Error durante la grabación. Inténtelo de nuevo');
                            window.location.href='./altaVehiculos.php';
                        </script>
                    ";     
                }

        } else {
            echo "
                <script>
                    alert('Error durante la grabación. Inténtelo de nuevo');
                    window.location.href='./altaVehiculos.php';
                </script>
            ";     
        }
      

    } else {
        echo "
                <script>
                    alert('Error durante la grabación. Inténtelo de nuevo');
                    window.location.href='./altaVehiculos.php';
                </script>
            ";     
    }
?>