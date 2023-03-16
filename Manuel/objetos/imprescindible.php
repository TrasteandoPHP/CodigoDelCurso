<?php 
    class Consulta {
        private $tabla, $condicion, $conexion;

        function __construct($tab, $cond){
            $this->tabla = $tab;
            $this->condicion = $cond;
            $this->conexion = new mysqli("10.10.10.108","muevemeelcitroen","grua","bdclase");
        }

        function hazQuery(){
            $sql = "SELECT * FROM $this->tabla $this->condicion";
            return $this->conexion->query($sql);
        }

        function hazFetch(){
            $sql="SELECT * FROM $this->tabla $this->condicion";
            $ejecutar = $this->conexion->query($sql);
            return $ejecutar;
        }

        function cuantos(){
            $sql="SELECT * FROM $this->tabla $this->condicion";
            $ejecutar = $this->conexion->query($sql);
            return $ejecutar->num_rows;
            //echo $ejecutar->num_rows;
        }

        function cambiarPropiedades($tab, $cond){
            $this->tabla = $tab;
            $this->condicion = $cond;
        }
    }

    $consulta1 = new Consulta("productos","");
    echo $consulta1->cuantos()."\n";
    var_dump($consulta1->hazFetch());
    echo "\n";
    var_dump($consulta1->hazQuery())."\n";
    echo "\n";

    $consulta2 = new Consulta("productos","WHERE nom_pro='Alfonso'");









?>