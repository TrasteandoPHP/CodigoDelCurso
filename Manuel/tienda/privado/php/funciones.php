<?php
    function grabar($tabla, $campos, $valores){
        $conexion = conectar();
        $sqlGrabacion = "INSERT INTO $tabla ($campos) VALUES ($valores)";
        return $conexion->query($sqlGrabacion);
    }

    function ultimoGrabado(){
        $conexion = conectar();
        return $conexion->insert_id;
    }

    function existe($tabla, $condicion){
        $conexion = conectar();
        $sqlConsulta = "SELECT * FROM $tabla $condicion";
        $ejecutarSqlConsulta = $conexion->query($sqlConsulta);
        return $ejecutarSqlConsulta->fetch_array();  
    }

    function preparaBucle($tabla, $condicion){
        $conexion = conectar();
        $sqlConsulta = "SELECT * FROM $tabla $condicion";
        return $conexion->query($sqlConsulta);  
    }

    function actualizar($tabla, $campos, $condicion){
        $conexion = conectar();
        $sqlActualizar = "UPDATE $tabla SET $campos $condicion";
        return $conexion->query($sqlActualizar);
    }

    function borrar ($tabla, $condicion){
        $conexion = conectar();
        $sqlBorrado = "DELETE FROM $tabla $condicion";
        return $conexion->query($sqlBorrado);
    }

    function conectar(){
        return $conexion = new mysqli("10.10.10.107","cabreiroa","agua","tiendados");
    }
?>