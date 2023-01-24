<?php
    function grabar($tabla, $campos, $valores){
        include("./php/conexion.php");
        $sqlGrabacion = "INSERT INTO $tabla ($campos) VALUES ($valores)";
        return $conexion->query($sqlGrabacion);
    }

    function ultimoGrabado(){
        include("./php/conexion.php");
        return $conexion->insert_id;
    }

    function existe($tabla, $condicion){
        include("./php/conexion.php");
        $sqlConsulta = "SELECT * FROM $tabla $condicion";
        $ejecutarSqlConsulta = $conexion->query($sqlConsulta);
        return $ejecutarSqlConsulta->fetch_array();  
    }

    function preparaBucle($tabla, $condicion){
        include("./php/conexion.php");
        $sqlConsulta = "SELECT * FROM $tabla $condicion";
        return $conexion->query($sqlConsulta);  
    }

    function actualizar($tabla, $campos, $condicion){
        include("./php/conexion.php");
        $sqlActualizar = "UPDATE $tabla SET $campos $condicion";
        return $conexion->query($sqlActualizar);
    }

    function borrar (){
        include("./php/conexion.php");
        $sqlBorrado = "DELETE FROM $tabla $condicion";
        return $conexion->query($sqlBorrado);
    }
?>