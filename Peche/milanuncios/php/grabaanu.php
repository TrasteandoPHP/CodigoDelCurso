<?php
//recoger los datos referente al anuncio
$nomanu = $_POST["nombre"];
$preanu = $_POST["precio"];
$desanu = $_POST["descripcion"];
//llamamos al archivo de conexion
include("./conexion.php");
//hacemos el sql para grabar
$sqlanu = "INSERT INTO anuncios (nom_anu,pre_anu,des_anu) VALUES ('$nomanu','$preanu','$desanu') ";
if($conexion->query($sqlanu))
{
    $codanu = $conexion->insert_id;
    mkdir("./../imagenes/$codanu", 0777);
    //vamos a recoger el contador para llevar a cabo la grabacion y el movimientpo de imagenes
    $contador = $_POST["contador"];
    for($i=1;$i<=$contador;$i++)
{
        $archivo = $_FILES["archivo$i"]["name"];
        $sqlima = "INSERT INTO imagenes (cod_anu, nom_ima) VALUES ('$codanu','$archivo')";
        if ($conexion->query($sqlima)) 
        {
            $ruta = "./../imagenes/$codanu/$archivo";
            @move_uploaded_file($_FILES["archivo$i"]["tmp_name"], $ruta);
        
        }
        else
        {

        }
}

    echo "<script>
    alert('anuncio registro');
    windows.location.href='./../index.html';
    </script>";

}
else
{
    echo "<script>
    alert('ocurrio error vuelva a intentarlo');
    windows.location.href='./../index.html';
    </script>";

}

?>