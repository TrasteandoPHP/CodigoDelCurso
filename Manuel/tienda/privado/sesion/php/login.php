<?php
    if(isset($_POST["mail"])){
        include("./funciones.php");
        // Recibimos datos
        $email = $_POST["mail"];
        $pass = $_POST["password"];

        $resultadoLogin = existe("administradores", "WHERE email_adm='$email' AND pass_adm='$pass'");

        if($resultadoLogin){
            // Se encontraron datos
            session_start();
            $codigoAdmin = $resultadoLogin["cod_adm"];
            $_SESSION["admin"] = $codigoAdmin;
            echo "bien";
        } else {
            // No hay coincidencia
            echo "mal";
        }       
        
    } else {
        echo "No puedes acceder a esta página";
    }
?>