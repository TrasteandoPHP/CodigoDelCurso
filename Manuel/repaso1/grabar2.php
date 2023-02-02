<?php
    $apellido = $_POST["Ape1"];
    $password = $_POST["PasworD"];

    $conexion = new mysqli("10.10.10.199","rata","1234","repasando");

    $sqlConsulta = "INSERT INTO clientes (apellido1, pas, vez) VALUES ('$apellido','$password','3')";

    if($conexion->query($sqlConsulta)){
        echo "Grabación correcta";
    }else{
        echo "Error en grabación";
    }
?>