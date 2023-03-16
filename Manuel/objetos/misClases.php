<?php
    class Operaciones {
        private $numero1 = 20;
        private $numero2 = 8;

        function __constructor(){
            $this->numero1;
            $this->numero2;
        }

        function sumar($n1, $n2){
            $this->numero1 = $n1;
            $this->numero2 = $n2;
            $suma = $this->numero1 + $this->numero2;
            return $suma;
        }

        function sumarSinParametros(){            
            $suma = $this->numero1 + $this->numero2;
            return $suma;
        }
    } 

    $objeto1 = new Operaciones();
    $objeto2 = new Operaciones();

    echo $objeto1->sumar(5,3);
    echo "\n";

    echo $objeto2->sumarSinParametros();
    echo "\n";
    
?>