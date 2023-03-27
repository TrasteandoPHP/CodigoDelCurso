<?php
    $datos = $_POST["datos"];    

    $miArray = json_decode($datos);

    $palabra = $miArray[0];
    $numeroLetrasPalabra = $miArray[1];

    $conexion = new mysqli("10.10.10.199","juego","1234","ahorcado");

    $sqlBuscarPalabra = "SELECT * FROM palabras WHERE pal_pal='$palabra'";
    $ejecutarSqlBuscarPalabra = $conexion->query($sqlBuscarPalabra);

    if($ejecutarSqlBuscarPalabra->fetch_array()){
        echo "La palabra ya existe. Inténte grabar una palabra distinta";
    } else {
        $sqlGrabaPalabra = "INSERT INTO palabras(pal_pal, letras_pal) VALUES ('$palabra','$numeroLetrasPalabra')";
        if($conexion->query($sqlGrabaPalabra)){
            echo "Grabación correcta";
        }
    }
?>