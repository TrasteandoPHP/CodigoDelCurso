<?php
    include("./sistemaCRUD.php");
    $alumnos = new Consultar("alumnos","");
    $consultaTodosAlumnos = $alumnos->consultarQuery();
    $numeroAlumnos = $alumnos->contarRegistros();

    foreach ($consultaTodosAlumnos as $registro) {
        $nombre = $registro["nom_alu"];
        $apellidosCompletos = $registro["ap_alu"];
        $email = $registro["email_alu"];
        // Vamos a explotar el apellido PERO ojo porque tenemos un problema.
        $apellidos = explode(" ", $apellidosCompletos);
        $apellido1 = $apellidos[0];
        //$apellido2 = $apellidos[1];
        $apellido2 = "";
        for ($i = 1; $i < count($apellidos); $i++) {
            $apellido2 .= $apellidos[$i] . " ";
        }

        echo "
            <tr>
                <td>$nombre</td>
                <td>$apellido1</td>
                <td>$apellido2</td>
                <td>$email</td>
                <td>
                    <i class='fa fa-edit'></i>
                    <i class='fa fa-trash'></i>                                                
                </td>
            </tr>        
        ";
    }

?>

