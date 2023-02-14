<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Perfil</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["usuario"])){
            // Recogemos los datos del formulario.
            $codigo = $_SESSION["usuario"];
            $nombre = $_POST["nombre"];
            $imagen = $_FILES["imagen"]["name"];

            // Nos conectamos a la BBDD.
            $conexion = new mysqli("10.10.10.199","febrero","1234","alumnos");
            // SQL para modificar registro.
            $sqlActualizarUsuario = "UPDATE alumnado SET nom_alu='$nombre', avatar_alu='$imagen' WHERE cod_alu='$codigo'";
            // Ejecutamos preguntando.
            if($conexion->query($sqlActualizarUsuario)){
                $ruta = "./imagenes/$codigo/$imagen";
                @move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
                echo "
                        <script>
                            alert ('Perfil modificado.');
                            window.location.href='./perfil.php';
                        </script>
                    ";    
            } else {
                echo "
                        <script>
                            alert ('Ocurrio un error al actualizar el perfil.');
                            window.location.href='./perfil.php';
                        </script>
                    ";    
            }           

        } else {
            echo "
                        <script>
                            alert ('No puedes acceder a esta página sin realizar LOGIN.');
                            window.location.href='./index.php';
                        </script>
                    ";    

        }  
    ?>
</body>
</html>