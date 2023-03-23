<?php

    $fechaSistema = date("Y-m-d");
    echo $fechaSistema;
    echo "<br>";
    $horaSistema = date("H:i:s");
    echo $horaSistema;
    echo "<br>";
    $miArray = array(
        array(
            $fechaSistema,
            $horaSistema
        )
    );
    var_dump($miArray);
?>