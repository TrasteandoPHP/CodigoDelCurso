<?php
    $codpro = $_POST["codigodelaprovincia"];

    $conexion = mysqli("localhost","root","","practica");
    $sql = "SELECT * FROM concellos WHERE cod_pro='$codpro'";
    $ej = $conexion->query($sql);
    foreach($ej as $reg){
        $codcon = $reg["cod_con"];
        $nomcon = $reg["nom_con"];
        echo "<option value='$codcon'>$nomcon</option>";
    }
?>