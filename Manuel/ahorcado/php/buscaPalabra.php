<?php
    $conexion = new mysqli("10.10.10.199","juego","1234","ahorcado");

    $sqlEscogePalabra = "SELECT * FROM palabras ORDER BY rand() limit 1";
    $ejecutarSqlEscogePalabra = $conexion->query($sqlEscogePalabra);
    $palabra = $ejecutarSqlEscogePalabra->fetch_array();
    $datos = json_encode($palabra);
    echo $datos;





?>