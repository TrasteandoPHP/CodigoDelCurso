<?php
    // Recibimos datos
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["ap1"];
    $apellido2 = $_POST["ap2"];
    $email = $_POST["ema"]; 
    $password = $_POST["pass"];

    // Unimos los apellidos en un solo campo 
    $apellidos = $apellido1." ".$apellido2;

    // Encriptamos la contraseña
    $passwordEncriptada = password_hash($password, PASSWORD_DEFAULT);

    $tabla = "alumnos";
    $campos = "nom_alu, ap_alu, email_alu, pass_alu";
    $valores = "'$nombre','$apellidos','$email','$passwordEncriptada'";

    $condicion = "email_alu='$email'";    
    
    // hacemos el include del fichero de clases.
    include ("sistemaCRUD.php");


    $consultaEmail = new Consultar($tabla, $condicion);
    //$consultaEmail->consultarFetch();

    if(empty($consultaEmail->consultarFetch())){
        // Creamos un objeto para grabar el alumno
        $grabaAlumno = new Grabar($tabla, $campos, $valores);

        // Grabamos los datos haciendo una llamada a la función grabar()
        if($grabaAlumno->grabar()){
            echo "<script>
                    alert('Alumno registrado correctamente');
                    window.location.href='./formularioAlumno.html';
                </script>
                ";
        } else {
            echo "<script>
                    alert('Error durante la grabación. Inténtelo de nuevo');
                    window.location.href='./formularioAlumno.html';
                </script>
                ";       
        }
    } else {
        echo "<script>
                    alert('El Alumno ya se encuentra registrado. ');                   
                    window.location.href='./formularioAlumno.html';
                </script>
                ";     
    }
?>