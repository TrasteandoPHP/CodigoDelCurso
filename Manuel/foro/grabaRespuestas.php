<?php
    $codigoMensaje = $_POST["mensaje"]; 
    $codigoAlumno = $_POST["alumno"];
    $respuesta = $_POST["respuesta"];   

    $hoy = date("Y-m-d");
    $hora = date("H:i:s");

    $conexion = new mysqli("localhost","root","","escuela");


    $sqlGrabacionMensaje = "INSERT INTO respuestas (cod_men, cod_alu, txt_res, fecha_res, hora_res) VALUES ('$codigoMensaje','$codigoAlumno','$respuesta','$hoy','$hora') ";
        
    if($conexion->query($sqlGrabacionMensaje)){
        echo "
            <script>
                alert('Respuesta grabada correctamente.');  
                window.location.href='./registroRespuestas.php';            
            </script>
        ";     

        } else {
            echo "
                <script>
                    alert('Error durante la grabación. Inténtelo de nuevo');
                    window.location.href='./registroRespuestas.php';                    
                </script>
            ";     
        }    
?>