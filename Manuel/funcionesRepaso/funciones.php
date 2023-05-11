<?php

    function conexion(){
        return new mysqli("10.10.10.199","mira","1234","miramos");
    }

    function campos($tabla){
        $conexion = conexion();
        $sql = "SHOW COLUMNS FROM $tabla";
        $campos = array();
        foreach($conexion->query($sql) as $registro){
            array_push($campos, $registro["Field"]);
        }
        return $campos;
    }

    function formulario($tabla){
        $campos = campos($tabla);
        for($i=1; $i<count($campos);$i++){
            
            echo "<input type='text' name='$campos[$i]' placeholder='$campos[$i]'>";
        }
        echo "<input type='hidden' name='tabla' value='$tabla'>";
        echo "<input type='submit' value='Grabar'>";
    }

    function RecibirPorPOST(){
        $tabla = $_POST["tabla"];
        $campos = campos($tabla);
        $valores = "";
        $camposstr = "";

        for ($i=1; $i<count($campos); $i++){
            $camposstr .= "$campos[$i],";
            $valores .= "'".$_POST[$campos[$i]]."',";
        }

        $camposstr = substr($camposstr,0,-1);
        $valores = substr($valores,0,-1);

        return insertar($tabla, $camposstr, $valores);
    }

    function insertar($tabla, $campos, $valores){
        $conexion = conexion();
        $sqlInsertar = "INSERT INTO $tabla($campos) VALUES ($valores)";
        return $conexion->query($sqlInsertar);
    }    
?>    