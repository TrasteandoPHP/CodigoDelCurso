<?php
    $botonPulsado = $_POST["botonPulsado"];
    //echo "Pulsado boton Nº$botonPulsado";

    $conexion = new mysqli ("localhost","root","","contadorClicks");
    $sqlGrabarContadorBoton = "INSERT INTO botonpulsado(num_bot, pul_bot) VALUES ('$botonPulsado','1')";
    $ejecutarSqlGrabarContadorBoton = $conexion->query($sqlGrabarContadorBoton);
    //echo "Grabado boton nº$botonPulsado con 1ª pulsación";
?>