<?php
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];    
    $dni = $_POST["dni"];
    $encryptedPass = base64_encode($_POST["pass"]); 
    $email = $_POST["email"];
    $codigoCurso = $_POST["cod_cur"];    

    include ("./assets/php/conexion.php");

    $sqlExisteAlumno = "SELECT * FROM alumnos WHERE dni_alu='$dni'";
    $ejecutarSqlExisteAlumno = $conexion->query($sqlExisteAlumno);    

    if(!$ejecutarSqlExisteAlumno->fetch_array()){
        $sqlRegistroAlumno = "INSERT INTO alumnos (nom_alu, ape_alu, dni_alu, pass_alu, email_alu, cod_cur) VALUES ('$nombre','$apellidos','$dni','$encryptedPass','$email','$codigoCurso')";
        $ejecutarRegistroAlumno = $conexion->query($sqlRegistroAlumno);

        if($ejecutarRegistroAlumno)
        {
            echo "Alumno registrado correctamente";
        }
            else
        {
            echo "Ha ocurrido un error durante el registro de los datos";
        }
    }
    else 
    {
        echo "Este alumno ya está registrado";
    }

    echo "<br><br><button onclick='window.location.href=`./registroAlumnos.php`'>Volver</button>";
?>    