<?php
    class Persona {
        private $nombre;
        private $apellidos;

        function __construct($n, $a){
            $this->nombre = $n;
            $this->apellidos = $a;
        }

        function saludar(){
            echo "Buenos días $this->nombre $this->apellidos";
        }

        function cambiarNombre($n){
            $this->nombre = $n;
        }

        function cambiarApellidos($a){
            $this->apellidos = $a;
        }
    
        function nombre_OR_apellido($n, $a){
            if($n!=""){
                $this->nombre = $n;
            }
            if($a!=""){
                $this->apellidos = $a;
            }            
        }

        function mostrarApellidos(){
            $apellidos = $this->apellidos;
            echo "Tus apellidos son: $apellidos";
        }   
    }

    $ManuelCP = new Persona('Manuel', 'CP');
    
    $ManuelCP->saludar();
    echo "\n";
    $ManuelCP->mostrarApellidos();
    echo "\n";
    $ManuelCP->cambiarApellidos('Carro Moris');
    echo "\n";
    $ManuelCP->saludar();
    echo "\n";
    $ManuelCP->cambiarNombre('Berberechito');
    echo "\n";
    $ManuelCP->saludar();
    echo "\n";
    $ManuelCP->nombre_OR_apellido('Alfonso','');
    echo "\n";
    $ManuelCP->saludar();
    echo "\n";

?>