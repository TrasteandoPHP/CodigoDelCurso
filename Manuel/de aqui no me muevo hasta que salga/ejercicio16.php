<?php
    $email = $_POST["correo"]; 

    $conexion = new mysqli("localhost","root","","escuela");
    $sqlGrabacion = "INSERT INTO alumnos(email_alu) VALUES ('$email')";
    $ejecutarSqlGrabacion = $conexion->query($sqlGrabacion);
    
    echo "Grabación correcta del correo: ".$email;
?>