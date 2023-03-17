<?php
    class SistemaCRUD {
        private $servidor;
        private $user;
        private $pass;
        private $bd;

        // private $tabla;
        // private $campos;
        // private $valores;
        // private $condicion;

        function __construct($servidor, $user, $pass, $bd){
            $this->servidor = $servidor;
            $this->user = $user;
            $this->pass = $pass;
            $this->bd = $bd;
            $this->conexion = new mysqli("$servidor","$user","$pass","$bd");
        }

        function insert($tabla, $campos, $valores){
            $sql = "INSERT INTO $tabla($campos) VALUES ('$valores')";
            $ejecutar = $this->conexion->query($sql);

        }

        function select($campos, $tabla, $condicion){
            $sql = "SELECT $campos FROM $tabla $condicion";
            $ejecutar = $this->conexion->query($sql);
            return $ejecutar;            
        }


        function update($tabla, $campos, $condicion ){
            $sql = "UPDATE $tabla SET $campos WHERE $condicion";
            $this->conexion->query($sql);
        }


        function delete($tabla, $condicion){
            $sql = "DELETE FROM $tabla WHERE $condicion";
            $this->conexion->query($sql);  
        }
    
    }

    $operadorUno = new sistemaCRUD("localhost","root","","pruebas"); 
    // $operadorUno->insert('asignaturas','nom_asi','programacion');

    // echo "<br>Insert realizado correcto <br>";

    // $registro = $operadorUno->select('*','asignaturas','');
    // foreach($registro as $consulta){
    //     $nombreAsignatura = $consulta["nom_asi"];
    //     echo "$nombreAsignatura<br>";
    // }

    // echo "<br>Fin consulta<br>";

    // $operadorUno->update('asignaturas','nom_asi="Desarrollo de interfaces"','cod_asi=3');

    // echo "<br>Fin actualización<br>";

    // $registro = $operadorUno->select('*','asignaturas','');
    // foreach($registro as $consulta){
    //     $nombreAsignatura = $consulta["nom_asi"];
    //     echo "$nombreAsignatura<br>";
    // }

    // echo "<br>Fin consulta<br>";
  
    $operadorUno->delete("alumnos","cod_asi='1'");

    echo "<br>Fin borrado<br>";

    $registro = $operadorUno->select('*','asignaturas','');
    foreach($registro as $consulta){
        $nombreAsignatura = $consulta["nom_asi"];
        echo "$nombreAsignatura<br>";
    }

    echo "<br>Fin consulta<br>";
?>