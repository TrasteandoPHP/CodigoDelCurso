<?php
    $nom = $_POST["nombre"];
    $pas =password_hash($_POST["password"],PASSWORD_DEFAULT);
    $hoy = date("Y-m-d");
    $ahora = date("H:i:s");

    $conexion = new mysqli("10.10.10.102", "javimanu", "1234", "ejercicioa2");

    $sql = "INSERT INTO altaclientes(nom_cli,pass_cli,fech_alta,hora_alta) VALUES('$nom','$pas','$hoy','$ahora')";

    If ($conexion->query($sql))
    {
        echo "datos grabados";
        echo "<br>";
        echo "<a href=http://10.10.10.111/CodigoDelCurso/Manuel/EjercicioConjunto_JYM/index.html style='text-decoration:none; background-color:red'>VOLVER A FORMULARIO</a>";
    }
    else
    {
        echo "Ha habido un error";
    }

?>