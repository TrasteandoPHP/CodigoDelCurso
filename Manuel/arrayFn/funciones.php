<?php
    function recibirArray($arrayProductos){
        $arrayRespuestas = array();
        foreach($arrayProductos as $producto){
            //$nombreProducto = $producto;
            $respuesta = grabar($producto);
            //array_push($ar, grabar($respuesta));            
            array_push($arrayRespuestas, $respuesta);
        }

        return $arrayRespuestas;
    }


    function grabar($producto){
        $conexion = new mysqli("10.10.10.108","muevemeelcitroen","grua","bdclase");
        $sqlGrabacionProducto = "INSERT INTO productos(nom_pro) VALUES ('$producto')";
        if($conexion->query($sqlGrabacionProducto)){
            $mensaje = "OK";
        } else { 
            $mensaje = "NOT OK";
        }

        return $mensaje;
    }

    function montarArrayRespuestas($arrayDatos, $arrayRespuestas){
        $arrayMontado = array();
        for($i=0; $i<count($arrayDatos); $i++){
            $filaArray = array($arrayDatos[$i], $arrayRespuestas[$i]);
            array_push($arrayMontado, $filaArray);
        }

        return $arrayMontado;        
    }
?>