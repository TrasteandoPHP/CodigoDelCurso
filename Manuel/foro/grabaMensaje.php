<?php
    $codigoAlumno = $_POST["alumno"];
    $mensaje = $_POST["mensaje"];   

    $hoy = date("Y-m-d");
    $hora = date("H:i:s");

    $conexion = new mysqli("localhost","root","","escuela");


    $sqlGrabacionMensaje = "INSERT INTO mensajes(cod_alu, txt_men, fecha_men, hora_men) VALUES ('$codigoAlumno','$mensaje','$hoy','$hora') ";
        
    if($conexion->query($sqlGrabacionMensaje)){
        echo "
            <script>
                alert('Mensaje grabado correctamente.');  
                window.location.href='./registroMensajes.php';            
            </script>
        ";     

        } else {
            echo "
                <script>
                    alert('Error durante la grabación. Inténtelo de nuevo');
                    window.location.href='./registroMensajes.php';                    
                </script>
            ";     
        }    
?>