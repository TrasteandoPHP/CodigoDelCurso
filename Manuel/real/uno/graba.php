<?php
    // Recoger los datos que vienen del JQuery
    $n = $_POST["nom"];
    $a1 = $_POST["ap1"];
    $a2 = $_POST["ap2"];

    // Me conecto
    $conexion = new mysqli("localhost","root","","real");

    $sqlGrabacion = "INSERT INTO clientes (nom_cli, ape1_cli, ape2_cli) VALUES ('$n','$a1','$a2')";

    $ejecutarSqlGrabacion = $conexion->query($sqlGrabacion);

    if ($conexion->query($sqlGrabacion)){
        echo "Cliente grabado correctamente";
    }else{
        echo "Error durante la grabación. Inténtelo de nuevo";
    }
?>