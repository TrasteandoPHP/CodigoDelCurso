<?php
    $mail = $_POST["email"];

    $conexion = new mysqli("10.10.10.199","rata","1234","repasando");

    $sqlGrabacion = "INSERT INTO pachuli(Emilio) VALUES ('$mail')";

    if($conexion->query($sqlGrabacion)){
        echo "Grabado";
    } else {
        echo "Error al grabar";
    }
?>