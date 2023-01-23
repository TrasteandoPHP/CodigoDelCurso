<?php
    // Recoger los datos que vienen del JQuery
    $dato = $_POST["dato"];
    
    // Me conecto a la base de datos
    $conexion = new mysqli("localhost","root","","real");

    $sqlConsultaDato = "SELECT * FROM clientes WHERE nom_cli LIKE '%$dato%'";

    $ejecutarSqlConsultaDato = $conexion->query($sqlConsultaDato);
    
    if($ejecutarSqlConsultaDato->fetch_array()){
        foreach($ejecutarSqlConsultaDato as $registroDato){
            $nom = $registroDato["nom_cli"];
            $ape1 = $registroDato["ape1_cli"];
            $ape2 = $registroDato["ape2_cli"];
            echo "$nom $ape1 $ape2 <br>";
        }
    } else {
        echo "No existe ningúna coincidencia con esos datos. Intente otra consulta";
    }    
?>