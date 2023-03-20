<?php
    class Grabar {
        private $conexion, $tabla, $campos, $valores;

        function __construct($tabla, $campos, $valores){
            $this->tabla = $tabla;
            $this->campos = $campos;
            $this->valores = $valores;
            $this->conexion = new mysqli("10.10.10.199","viernes","1234","pruebas");
        }

        function grabar(){
            $sql = "INSERT INTO $this->tabla ($this->campos) VALUES ($this->valores)";
            return $this->conexion->query($sql);
        }

        function getUltimoRegistro(){
            return $this->conexion->insert_id;
        }
    }

    class Consultar {
        private $conexion, $tabla, $condicion;

        function __construct($tabla, $condicion){
            $this->tabla = $tabla;
            $this->condicion = $condicion;
            $this->conexion = new mysqli("10.10.10.199","viernes","1234","pruebas");
        }

        function setCondicion($condicion){
            $this->condicion = $condicion;
        }
        
        function setTabla($tabla){
            $this->tabla = $tabla;
        }

        function setTablayCondicion($tabla, $condicion){
            if($tabla!=""){
                setTabla($tabla);
            }

            if($condicion!=""){
                setCondicion($condicion);
            }
        }

        function consultarFetch(){
            if($this->condicion !=""){
                $condicion = "WHERE ".$this->condicion;
            } else {
                $condicion = "";
            }
            $sql = "SELECT * FROM $this->tabla $condicion";
            $ejecutar = $this->conexion->query($sql);
            return $ejecutar->fetch_array();
        }

        function consultarQuery(){
            if($this->condicion !=""){
                $condicion = "WHERE ".$this->condicion;
            } else {
                $condicion = "";
            }
            $sql = "SELECT * FROM $this->tabla $condicion";
            return $this->conexion->query($sql);                        
        }

        function contarRegistros(){
            if($this->condicion !=""){
                $condicion = "WHERE ".$this->condicion;
            } else {
                $condicion = "";
            }
            $sql = "SELECT * FROM $this->tabla $condicion";
            $ejecutar = $this->conexion->query($sql);
            return $ejecutar->num_rows;

            // $ejecutar = $this->haz_query();
            // return $ejecutar->num_rows;
        }
    }

    class Modificar {
        private $tabla, $campos, $condicion, $conexion;

        function __construct($tabla, $campos, $condicion){
            $this->tabla = $tabla;
            $this->campos = $campos;
            $this->condicion = $condicion;
            $this->conexion = new mysli("10.10.10.199","viernes","1234","pruebas");
        }

        function setCondicion($condicion){
            $this->condicion = $condicion;
        }

        function setTabla($tabla){
            $this->tabla = $tabla;
        }

        function setCampos($campos){
            $this->campos = $campos;
        }

        function setAll($condicion, $tabla, $campos){
            setCondicion($condicion);
            setTabla($tabla);
            setCampos($campos);
        }

        function actualizar($tabla, $campos, $condicion){
            $sql = "UPDATE $this->tabla SET $this->campos WHERE $this->condicion";
            return $this->conexion->query($sql);
        }
    }

    class Borrar {
        private $tabla, $condicion, $conexion;

        function __construct($tabla, $condicion){
            $this->tabla = $tabla;          
            $this->condicion = $condicion;
            $this->conexion = new mysli("10.10.10.199","viernes","1234","pruebas");
        }

        function setTabla($tabla){
            $this->tabla = $tabla;
        }

        function setCondicion($condicion){
            $this->condicion = $condicion;
        }

        function setAll($tabla, $condicion){
            $this->tabla = $tabla;
            $this->condicion = $condicion;
        }

        function borrar(){
            $sql = "DELETE FROM $this->tabla WHERE $this->condicion";
            return $this->conexion->query($sql);
        }
    }
?>