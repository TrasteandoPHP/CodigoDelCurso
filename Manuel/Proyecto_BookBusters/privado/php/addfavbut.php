<?php
    $codLib = $_POST["cod"];
    // cambiar cuando exista session
    $codUsu="1";
    $con = new mysqli("10.10.10.199","busters","1234","biblioteca");
    $sqlQuery  = "SELECT * FROM favoritos WHERE cod_lib = '$codLib' AND cod_usu = '$codUsu'";
    $sqlInsert = "INSERT INTO favoritos (cod_usu,cod_lib) VALUES('$codUsu','$codLib')";
    if (!$con->query($sqlQuery)->fetch_array() )
    {
        $con->query($sqlInsert);
        echo "Añadido a favoritos";
    }
    else
    {
        echo "Ya está en favoritos";
    }
?>