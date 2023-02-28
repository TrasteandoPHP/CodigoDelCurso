<?php
    $botonPulsado = $_POST["botonPulsado"];
    //echo "Pulsado boton Nº$botonPulsado";

    $conexion = new mysqli ("localhost","root","","contadorClicks");
    $sqlConsultaContadorBoton = "SELECT * FROM  botonPulsado WHERE num_bot='$botonPulsado' ORDER BY pul_bot ASC";
    $ejecutarSqlConsultaContadorBoton = $conexion->query($sqlConsultaContadorBoton); 
    if($registroContadorBoton = $ejecutarSqlConsultaContadorBoton->fetch_array()){
        $cantidadPulsada = $registroContadorBoton["pul_bot"];
        $sqlActualizarContadorBoton = "UPDATE botonPulsado SET pul_bot='$cantidadPulsada+1' WHERE num_bot='$botonPulsado'"; 
    } else {
        $sqlGrabarContadorBoton = "INSERT INTO botonPulsado(num_bot, pul_bot) VALUES ('$botonPulsado','1')";
        $ejecutarSqlGrabarContadorBoton = $conexion->query($sqlGrabarContadorBoton);
    }
    
    echo "Actualizado contador del boton nº $botonPulsado";

?>