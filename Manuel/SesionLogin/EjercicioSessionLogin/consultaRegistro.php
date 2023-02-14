<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta Registro</title>
    </head>
    <body>
        <?php
            session_start();
            $codigoUser = $_SESSION["usuario"]; 
            $conexion = new mysqli("localhost","root","","EjercicioSessionLogin");
            $sqlConsultaUsuario = "SELECT * FROM usuarios WHERE cod_user='$codigoUser'";
            $ejecutarSqlConsultaUsuario = $conexion->query($sqlConsultaUsuario);
            
            $registro = $ejecutarSqlConsultaUsuario->fetch_array();
            $nombreUser = $registro["nom_user"];
                
            echo "<h1>Bienvenido $nombreUser</h1>";

            $conexion = new mysqli("localhost","root","","EjercicioSessionLogin");
            $sqlConsultaRegistros = "SELECT * FROM registros ORDER BY fecha_reg ASC";
            $ejecutarSqlConsultaRegistros = $conexion->query($sqlConsultaRegistros);
            foreach($ejecutarSqlConsultaRegistros as $registro){
                $fechaRegistro = $registro["fecha_reg"];
                $horaRegistro = $registro["hora_reg"];
                $codigoUsuario = $registro["cod_user"];
                $tipoRegistro = $registro["tipo_reg"];

                echo "<h4>$fechaRegistro | $horaRegistro | $codigoUsuario | $tipoRegistro</h4><br>";
            }            
        ?>
    </body>
</html>