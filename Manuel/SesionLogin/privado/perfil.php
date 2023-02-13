<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Privado</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["usuario"])){
            // Aquí irá todo lo que queremos que se vea porque pasaron por el LOGIN.
            $codigo = $_SESSION["usuario"];
            $conexion = new mysqli("10.10.10.199","febrero","1234","alumnos");
            $sqlConsultaCodigo = "SELECT * FROM alumnado WHERE cod_alu='$codigo'";
            $ejecutarSqlConsultaCodigo = $conexion->query($sqlConsultaCodigo);
            $registro = $ejecutarSqlConsultaCodigo->fetch_array();
            $nombre = $registro["nom_alu"];
            $email = $registro["email_alu"];
            echo "Perfil de $nombre<br><br>";
    ?>
        <form action="modificaPerfil.php" method="POST">
            <input type="text" name="nombre" value="<?php echo $nombre?>" placeholder="Nombre">
            <input type="text" name="email" value="<?php echo $email?>" readonly>
            <br><br>
            <input type="submit" value="Modificar">
        </form>
    <?php        
        } else {
            // No ha pasado por el LOGIN, así que ....
            header("location:./../index.html");
        }
    ?>
</body>
</html>