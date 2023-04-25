<?php
    // función que encripta y desencripta

    function encriptado($accion, $texto){
        $modo = "AES-128-ECB";
        $llave = "mecachisenlamar";

        if($accion == "e"){
            $textoEncriptado = openssl_encrypt($texto, $modo, $llave);
            return $textoEncriptado;
        } else {
            $textoDesencriptado = openssl_decrypt($texto, $modo, $llave);
            return $textoDesencriptado;
        }
    }


    // Llamadas a función y demás código

    $email = "alfonso@medellin.ef";
    echo "email texto plano: $email<br>";

    $emailEncriptado = encriptado("e", $email);
    echo "email encriptado: $emailEncriptado<br>";

    // Desencriptando el correo.
    $emailDesencriptado = encriptado("d", $emailEncriptado);

    if($emailDesencriptado==$email){
        echo "----------------------------------------------------------";
        echo "";
        echo "<br>Desencriptando email ........<b>email correcto</b><br>";
        echo "";
        echo "----------------------------------------------------------";
    } else {
        echo "------------------------------------------------------------";
        echo "";
        echo "<br>Desencriptando email ........<b>email incorrecto</b><br>";
        echo "";
        echo "------------------------------------------------------------";
    }
    
?>