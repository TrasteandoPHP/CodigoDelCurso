<?php
    // Tengo que recibir DNI.
    $dni = $_POST["dni"];

    // Conectarme a la BBDD.
    $conexion = new mysqli("localhost","root","","ensal");

    // Tengo que buscar ese DNI en la tabla alumnos.(Veo si existe).   
    $sqlConsultaDni = "SELECT * FROM alumnos WHERE dni_alu='$dni'";
    $ejecutarSqlConsultaDni = $conexion->query($sqlConsultaDni);

    if($registro = $ejecutarSqlConsultaDni->fetch_array()){
        // Si existe saco el código.
        $codigoAlumno = $registro["cod_alu"];

        // Tengo que sacar la fecha del sistema.
        $fechaSistema = date("Y-m-d");
        $horaSistema = date("H:i:s");

        // Tengo que comprobar el último registro de hoy de ese alumno en la tabla registros.
        $sqlConsultaRegistro = "SELECT * FROM registros WHERE cod_alu='$codigoAlumno' AND fecha_reg='$fechaSistema' ORDER BY cod_reg DESC";
        $ejecutarSqlConsultaRegistro = $conexion->query($sqlConsultaRegistro);

        if($registro = $ejecutarSqlConsultaRegistro->fetch_array()){
        // Si existe tengo que saber qué tipo hay (entrada o salida), y grabar el contrario.
            $tipoRegistro = $registro["tipo_reg"];

            if($tipoRegistro=="Entrada"){

                $tipoRegistro = "Salida";

            } else {

                $tipoRegistro = "Entrada";
            }

        } else {
            // Si no existe grabaré una entrada con el dato tipoReg=Entrada.
            $tipoRegistro = "Entrada";
        }

        $sqlGrabacionRegistro = "INSERT INTO registros(cod_alu, fecha_reg, hora_reg, tipo_reg) VALUES ('$codigoAlumno','$fechaSistema','$horaSistema','$tipoRegistro')";
        if($conexion->query($sqlGrabacionRegistro)){
            echo "
                <script>
                    alert('$tipoRegistro registrada.');
                    window.location.href='./index.html';
                </script>
            ";       
        } else {
            echo "
                <script>
                    alert('Error durante la grabación.');
                    window.location.href='./index.html';
                </script>
            ";   
        }                   

    } else {
        // En caso contrario .... Mensaje.
        echo "
            <script>
                alert('No existe ningún alumno registrado con ese DNI.');
                window.location.href='./index.html';
            </script>
        ";
    }    
?>