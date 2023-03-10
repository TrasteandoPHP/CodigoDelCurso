<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Index</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h1>Index</h1>
                    <?php
                        include("./funciones.php");
                        // Imaginemos que hay una tabla de conexiones que graba el día y la hora.
                        $hoy = date("Y-m-d");
                        $hora = date("H:i:s");
                        // Vamos a grabar una conexión pero no quiero mostrarle nada a la perosona (no hay mensaje)
                        insertar("conexiones","fecha_con, hora_con", "'$hoy', '$ahora'");

                        // Vamos a grabar una conexión pero quiero comprobar si se graba o no el dato.
                        if(insertar("conexiones","fecha_con, hora_con", "'$hoy', '$ahora'")){
                            alerta("Conexión grabada", "./index.php");
                        } else {
                            alerta("Ocurrio un error", "./index.php");
                        }         
                        
                        // Vamos a grabar una conexión si no existe.
                        if(consultaFetch("conexiones", "WHERE fecha_con='$hoy'")){

                        } else {
                            insertar("","","","");
                        }

                        // Vamos a grabar una conexion si no existe. Pero ojo en caso de que exista tenemos que actualizar la hora.
                        if($registro = consultaFetch("conexiones", "WHERE fecha_con='$hoy'")){
                            // Parte positiva. Actualizo.
                            $codigoConexion = $registro["cod_con"];
                            modificar("conexiones", "hora_con='$ahora'", "WHERE cod_con='$codcon'");
                        } else {
                            insertar("conexiones","tabla","valores");
                        }

                        // Tenemos que consultar la tabla alumnos y mostrarlos a todos.
                        $ejecutar = consultaQuery("alumnos", "");
                        foreach($ejecutar as $registro){}
                        // OR
                        foreach(consultaQuery("alumnos", "") as $registro){}
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>