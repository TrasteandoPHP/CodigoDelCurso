<?php
    $conexion = new mysqli("localhost","root","","manuelcp");
    $sqlConsulta = "SELECT * FROM provincias";
    $ejecutarSqlConsulta = $conexion->query($sqlConsulta);

    foreach($ejecutarSqlConsulta as $registro){
        $codigoProvincia = $registro["cod_prov"];
        $nombreProvincia = $registro["nom_prov"];
        $comunidadProvincia = $registro["comunidad_prov"];

        echo "$codigoProvincia - $nombreProvincia - $comunidadProvincia<br>";
    }
?>