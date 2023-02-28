<?php
    $codigoPersona = $_POST["codigoPersona"];
    $nombrePersona = $_POST["nombrePersona"];
        
    $conexion = new mysqli ("10.10.10.199","bareto","1234","bar");
    $sqlConsultaEstadoPersona = "SELECT * FROM  personas WHERE cod_per='$codigoPersona'";
    $ejecutarSqlConsultaEstadoPersona = $conexion->query($sqlConsultaEstadoPersona); 
    $registroPersona = $ejecutarSqlConsultaEstadoPersona->fetch_array();
    $estadoPersona = $registroPersona["estado_per"];

    if($estadoPersona == "Abierto"){
        $estadoPersona = "Cerrado";
    } else {
        $estadoPersona= "Abierto";
    }

    $sqlActualizarEstadoPersona = "UPDATE personas SET estado_per='$estadoPersona' WHERE cod_per='$codigoPersona'";
    $ejecutarSqlActualizarEstadoPersona = $conexion->query($sqlActualizarEstadoPersona);

    echo "Actualizado el estado de $nombrePersona a $estadoPersona";     
?>