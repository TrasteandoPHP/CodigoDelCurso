<?php
    session_start();
    if($_SESSION["bookbusters"]){
    
    $codLib = $_POST["cod"];
    $codUsu= $_SESSION["bookbusters"];
    
    $con = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
    $sqlQuery  = "SELECT * FROM favoritos WHERE cod_lib = '$codLib' AND cod_usu = '$codUsu'";
    $sqlInsert = "INSERT INTO favoritos (cod_usu,cod_lib) VALUES('$codUsu','$codLib')";
    if (!$con->query($sqlQuery)->fetch_array() )
    {
        $con->query($sqlInsert);
    }
    else
    {
    }
}
