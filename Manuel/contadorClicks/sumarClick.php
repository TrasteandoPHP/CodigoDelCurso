<?php
    $botonPulsado = $_POST["botonPulsado"];
    //echo "Pulsado boton Nº$botonPulsado";

    $conexion = new mysqli ("localhost","root","","contadorClicks");
    $sqlConsultaContadorBoton = "SELECT * FROM  botonpulsado WHERE num_bot='$botonPulsado'";
    $ejecutarSqlConsultaContadorBoton = $conexion->query($sqlConsultaContadorBoton); 

    if($registroContadorBoton = $ejecutarSqlConsultaContadorBoton->fetch_array()){

        $cantidadPulsaciones = $registroContadorBoton["pul_bot"];
        $nuevaCantidadPulsaciones = $cantidadPulsaciones + 1;
        $sqlActualizarContadorBoton = "UPDATE botonpulsado SET pul_bot='$nuevaCantidadPulsaciones' WHERE num_bot='$botonPulsado'";
        $ejecutarSqlActualizarContadorBoton = $conexion->query($sqlActualizarContadorBoton); 
        echo "Actualizado contador del boton nº$botonPulsado con $nuevaCantidadPulsaciones pulsaciones";

    } else {

        $sqlGrabarContadorBoton = "INSERT INTO botonpulsado(num_bot, pul_bot) VALUES ('$botonPulsado','1')";
        $ejecutarSqlGrabarContadorBoton = $conexion->query($sqlGrabarContadorBoton);
        echo "Grabado boton nº$botonPulsado con 1ª pulsación";
        
    }

    // Se puede omitir la consulta si previamente se crea el registro. Solo habría que hacer el UPDATE.
    // $botonPulsado = $_POST["botonPulsado"];
    // $conexion = new mysqli ("localhost","root","","contadorClicks");
    // $sqlActualizarContadorBoton = "UPDATE botonpulsado SET pul_bot=pul_bot+1  WHERE num_bot='$botonPulsado'";
    // $ejecutarSqlActualizarContadorBoton = $conexion->query($sqlActualizarContadorBoton);
    





?>