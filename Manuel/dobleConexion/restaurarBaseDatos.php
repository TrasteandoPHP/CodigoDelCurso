<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurar Base Datos</title>
    </head>
    <body>
        <?php
            $conexionBaseDatosLocal = new mysqli("10.10.10.113","fila3","1234","fila3");

            $conexionBaseDatosRemota = new mysqli("10.10.10.199","fila3","1234","fila3");

            $sqlRecuperarBaseDatosLocal = "SELECT * FROM clientes";
            $ejecutarConsultaBaseDatosLocal = $conexionBaseDatosLocal->query($sqlRecuperarBaseDatosLocal);

            $num=1;

            foreach($ejecutarConsultaBaseDatosLocal as $registro){
                $nombre = $registro["nom_cli"];
                $email = $registro["email_cli"];
                $password = $registro["pass_cli"];                                

                $sqlRestaurarBaseDatosRemota = "INSERT INTO clientes(nom_cli, email_cli, pass_cli) VALUES ('$nombre','$email','$password')";
                
                if($conexionBaseDatosRemota->query($sqlRestaurarBaseDatosRemota)){
                    echo "Registro $num restaurado<br>";
                    $num++;

                } else {
                    echo "Error en grabación al restaurar Base de Datos remota";
                } 
            }           
        ?>    
    </body>
</html>