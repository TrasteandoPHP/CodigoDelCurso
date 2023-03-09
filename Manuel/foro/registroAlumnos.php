<?php
    $nombreAlumno = $_POST["nombre"];
    $emailAlumno = $_POST["email"];
    $passwordAlumno = $_POST["password"];

    $hoy = date("Y-m-d");

    $passwordEncriptada = password_hash($passwordAlumno, PASSWORD_DEFAULT);

    $conexion = new mysqli("localhost","root","","escuela");
    $sqlGrabacionAlumno = "INSERT INTO alumnos(nom_alu, email_alu, pass_alu, reg_alu) VALUES ('$nombreAlumno','$emailAlumno','$passwordEncriptada','$hoy') ";
        
    if($conexion->query($sqlGrabacionAlumno)){
        echo "
            <script>
                alert('Alumno grabado correctamente.');  
                window.location.href='./index.html';            
            </script>
        ";     

        } else {
            echo "
                <script>
                    alert('Error durante la grabación. Inténtelo de nuevo');
                    window.location.href='./index.html';                    
                </script>
            ";     
        }    
?>

