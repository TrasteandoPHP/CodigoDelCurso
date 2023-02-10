<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Añadir al Carrito</title>
    </head>
    <body>
        <?php
            session_start();

            // Me conecto a la BBDD.
            //$conexion = new mysqli("10.10.10.199","fila3","1234","fila3");
            $conexion = new mysqli("localhost","root","","fila3");

            if(isset($_SESSION["carrito"])){

                // Ya tenemos sesión. Qué dato tiene la $_SESSION.
                $codigo = $_SESSION["carrito"];

                // Vamos a actualizar en la tabla pruebas.
                $sqlGrabacion = "UPDATE pruebas SET cant_pru = cant_pru + 1 WHERE cod_pru=$codigo";

                // Ejecutamos la grabación.
                if($conexion->query($sqlGrabacion)){
                    // Se ha actualizado el registro.
                    echo "
                        <script>
                            alert('Producto añadido al carrito');
                            window.location.href='./productos.php';
                        </script>
                    ";
                } else {
                    // Error en la grabación.
                    echo "
                        <script>
                            alert('Error al grabar producto. Inténtelo de nuevo');
                            window.location.href='./productos.php';
                        </script>
                    ";
                }

            } else {                

                // Obtenemos la hora del sistema.
                $ahora = date("H:i:s");

                // Vamos a grabar en la tabla pruebas.
                $sqlGrabacion = "INSERT INTO pruebas(cant_pru, hora_pru) VALUES ('1','$ahora')";

                // Ejecutamos la grabación.
                if($conexion->query($sqlGrabacion)){
                    // Se grabó correctamente.
                    $codigo = $conexion->insert_id;
                    
                    $_SESSION["carrito"]=$codigo;

                    echo "
                        <script>
                            alert('Producto añadido al carrito');
                            window.location.href='./productos.php';
                        </script>
                    ";
                } else {
                    // Error en la grabación.
                    echo "
                        <script>
                            alert('Error al grabar producto. Inténtelo de nuevo');
                            window.location.href='./productos.php';
                        </script>
                    ";
                }   
            }            
        ?>
    </body>
</html>