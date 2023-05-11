<?php
    include("./funciones.php");

    if(RecibirPorPOST()){
        echo "Grabado";
    } else {
        echo "Ocurrió un error";
    }
?>