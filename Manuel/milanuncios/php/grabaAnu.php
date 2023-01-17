<?php
    
    // Recoger los datos referentes al anuncio
    $nom_anu = $_POST["nombre"];
    $pre_anu = $_POST["precio"];
    $des_anu = $_POST["descripcion"];

    //llamamos al archivo de conexion
    include("./conexion.php");

    // Hacemos el SQL para grabar en la tabla anuncios.
    $sqlAnuncio = "INSERT INTO anuncios (nom_anu, precio_anu, des_anu) VALUES ('$nom_anu','$pre_anu','$des_anu')";

    // Ejecutamos preguntando.
    if ($conexion->query($sqlAnuncio)){

        // Se ha grabado el anuncio. NECESITAMOS SABER EL CÓDIGO.
        $codigoAnuncio = $conexion->insert_id;

        // Vamos a crear la carpeta en donde se van a guardar las imagenes.
        mkdir("./../imagenes/$codigoAnuncio", 0777);

        // Vamos con las imagenes:
        // 1.- Vamos a recoger el contador para poder llevar a cabo la grabación y movimiento de las imagenes.
        $contador = $_POST["contador"];
        for ($i=1; $i<=$contador; $i++){
            $archivo = $_FILES["archivo$i"]["name"];
            $sqlImagen = "INSERT INTO imagenes (cod_anu, nom_ima) VALUES ('$codigoAnuncio','$archivo')";

            // Ejecutamos preguntado
            if($conexion->query($sqlImagen)){
                // Se grabó la imagen en la tabla. VAMOS A MOVER LA IMAGEN A LA CARPETA
                $ruta = "./../imagenes/$codigoAnuncio/$archivo";
                @move_uploaded_file($_FILES["archivo$i"]["tmp_name"], $ruta);
            }
        }

        echo "<script>
                alert('Anuncio registrado');
                window.location.href='./../index.html';
              </script>";
    } else {
        echo "<script>
                alert('Ocurrio un error, vuelve a intentarlo');
                window.location.href='./../index.html';
              </script>";
    }
?>