<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Logout</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="offset-3 col-12 col-md-5">
                    <?php
                        session_start();
                        if(isset($_SESSION["usuario"])){
                            $codigo = $_SESSION["usuario"]; 
                            $conexion = new mysqli("localhost","root","","EjercicioSessionLogin");
                            
                            $fecha = date("Y-m-d");
                            $hora = date("H:i:s");   
                    
                            // Grabamos el registro del cierre de sesión.
                            $sqlGrabacionLogout = "INSERT INTO registros(fecha_reg, hora_reg, cod_user, tipo_reg) VALUES ('$fecha','$hora','$codigo','Salida')"; 
                            if($conexion->query($sqlGrabacionLogout)){
                                echo "
                                    <script>
                                        alert ('Bye, Bye.....');
                                        window.location.href='./index.html';
                                    </script>
                                ";             
           
                            } else {
                                echo "
                                    <script>
                                        alert ('Error durante el cierre de sesión. Inténtelo de nuevo');
                                        window.location.href='./index.html';
                                    </script>
                                "; 
                            }                                    

                        } else { 
                            echo "
                            <script>
                                alert ('Para acceder a esta página tienes que iniciar sesión.');
                                window.location.href='./index.html';
                            </script>
                        "; 
                        }                         
                    ?>                        
                </div> <!-- div.col -->
            </div> <!-- div.row -->
        </div> <!-- div.container -->       
    </body>
</html>