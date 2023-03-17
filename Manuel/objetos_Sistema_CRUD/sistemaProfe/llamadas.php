<?php
    // Recogemos los datos del formulario.

    $nom = $_POST["nombre"];
    $ema = $_POST["email"];
    $ape = $_POST["apellidos"];
    $pas = password_hash($_POST["password"], PASSWORD_DEFAULT);

    include("sistemaCRUD.php");

    $alumno = new Grabar("alumnos","nom_alu, ape_alu, email_alu, pass_alu","'$nom','$ape','$ema','$pas'");
    $alumno->grabar();
    $codalu = $alumno->getUltimoRegistro();

    // Tengo que crear otro objeto porque este no permite consultar

    $busca = new Consultar("alumnos","");
    $numero = $busca->contarRegistros();
    $busca->setCondicion("nom_alu='Alfonso'");
    if($busca->consultarFetch()){
        $ejecutar = $busca->consultarQuery();
        foreach($ejecutar as $registro){
            
        }
    }
?>