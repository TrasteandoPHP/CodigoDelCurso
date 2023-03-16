<?php
    class Operaciones {
        private $numero1, $numero2;

        function __construct($n1, $n2){
            $this->numero1=$n1;
            $this->numero2=$n2;
        }

        function sumar(){
            $suma = $this->numero1 + $this->numero2;
            echo "$suma";
            // También se puede hacer un .... return $suma;
        }

        function restar(){
            $resta = $this->numero1 - $this->numero2;
            echo $resta;
        }
    } 

    $objeto1 = new Operaciones(5,6);

    $objeto1->sumar();
    echo "\n";
    $objeto1->restar();
    echo "\n";
?>