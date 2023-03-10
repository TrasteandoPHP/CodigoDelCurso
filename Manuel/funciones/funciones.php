<?php
    function insertar($tabla, $campos, $valores){
        $conexion = new mysqli("localhost","root","","fila1");
        $sql = "INSERT INTO $tabla($campos) VALUES ($valores)";
        return $conexion->query($sql);
        $conexion->close();
    }

    function ultimoDatoInsertado(){
        $conexion = new mysqli("localhost","root","","fila1");
        return $conexion->insert_id;
        $conexion->close();
    }

    function consultaFetch($tabla, $condicion){
        $conexion = new mysqli("localhost","root","","fila1");
        $sql = "SELECT * FROM $tabla $condicion";
        $ejecutar = $conexion->query($sql);
        return $ejecutar->fetch_array();
        $conexion->close();
    }

    function consultaQuery($tabla, $condicion){
        $conexion = new mysqli("localhost","root","","fila1");
        $sql = "SELECT * FROM $tabla $condicion";
        return $conexion->query($sql);
        $conexion->close();
    }

   function modificar($tabla, $campos, $condicion){
        $conexion = new mysqli("localhost","root","","fila1");
        $sql = "UPDATE $tabla SET $campos $condicion";
        return $conexion->query($sql);
        $conexion->close();
   } 

    function borrar($tabla, $condicion){
        $conexion = new mysqli("localhost","root","","fila1");
        $sql = "DELETE FROM $tabla $condicion";
        return $conexion->query($sql);
        $conexion->close();
    } 

    function alerta($mensaje, $link){
        echo "
            <script>
                alert($mensaje);
                window.location.href='$link';            
            </script>        
        ";
    }
?>