<?php
    $arrayJSON = $_POST["arrayDatos"];

    $arrayDatos = json_decode($arrayJSON);

    //var_dump($arrayDatos);
    foreach($arrayDatos as $registro){
        echo $registro."<br>";
    }
?>