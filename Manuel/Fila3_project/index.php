<?php
    session_start();
    if(isset($_SESSION["usuario"])){

        $hoy = date("Y-m-d");
              
        $conexion = new mysqli ("10.10.10.199","fila3","fila3","fila3");
        $sqlConsultaFecha  = "SELECT * FROM asignaciones ORDER BY fecha_asi DESC";
        $ejecutarSqlConsultaFecha = $conexion->query($sqlConsultaFecha);
        $registro=$ejecutarSqlConsultaFecha->fetch_array();
        $fechaRegistro = $registro["fecha_asi"];
        
        if($hoy == $fechaRegistro){
            echo "<script>alert('Los Empleados/vehículos ya están registrados en fecha de hoy');</script>";
        } else {
            $sqlLiberarEmpleados = "UPDATE empleados SET est_veh='0'";
            $conexion->query($sqlLiberarEmpleados);

            $sqlLiberarVehiculos = "UPDATE vehiculos SET est_veh='0'";
            $conexion->query($sqlLiberarVehiculos);         
            
        }

?>        
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                <script src="https://kit.fontawesome.com/7b8eabe9ec.js" crossorigin="anonymous"></script>
                <style>
                    body {
                        height: 100vh; 
                        min-height: 800px;   
                        margin: 0;
                        display: flex;        
                    }

                    .primary-container {
                        width: 40%;
                        height: 500px; 
                        min-width: 750px;   
                        text-align: center;
                        background-color: lightslategrey;
                        border-radius: 20px;
                    }

                    nav {
                        height: 0px;
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: space-between;
                    }

                    .links {
                        display: flex;
                        flex-direction: row;
                    }

                    a {
                        text-decoration: none;
                        margin: 20px;
                        padding: 10px;
                    }

                    .fa-solid {
                        color: black;
                        font-size: 30px;
                    }

                    .icon:hover {
                        color:cornflowerblue
                    }

                    hr {
                        margin-top: 30px;    
                    }

                    fieldset {
                        border:1px solid lightgray;
                        text-align: center;
                        height: 200px;                               
                    }

                    #tituloMenu {
                        margin-top: 60px;
                    }

                </style>
                <!-- <link rel="stylesheet" href="./css/style.css"> -->
                <title>Menú</title>
            </head>
            <body>
                <div class="container">
                    <div class="row">
                        <div class="offset-2 col-8 my-5">
                            <nav>
                                <div class="home">
                                    <a href="./../manuelcp/index.php">
                                        <i class="fa-solid fa-house icon" title="Home"></i>                
                                    </a>
                                </div>
                                <div class="links">
                                    <a href="./../daniboy/altaempleados.php">
                                        <i class="fa-solid fa-users icon" title="Alta Empleados"></i>                
                                    </a>
                                    <a href="./../manuelcp/altavehiculos.php">                                    
                                        <i class="fa-solid fa-car-side icon" title="Alta Vehículos"></i>                
                                    </a>
                                    <a href="./../daniboy/altamoviles.php">
                                        <i class="fa-solid fa-mobile-retro icon" title="Alta Móviles"></i>                                                 
                                    </a>
                                    <a href="./../peche/consultaasignaciones.php">
                                        <i class="fa-solid fa-book icon" title="Consultas"></i>               
                                    </a>
                                    <a href="./../peche/cerrar.php">
                                        <i class="fa-solid fa-right-from-bracket icon" title="exit"></i>                                          
                                    </a>
                                </div>                           
                            </nav>
                            <hr>  
                            <fieldset>
                                <h1 id="tituloMenu">Bienvenido al Proyecto fila3</h1>
                            </fieldset>                                
                        </div>                
                    </div>
                </div>                    
            </body>
        </html>
<?php

    } else { 
        echo "
            <script>
                alert('Inicie sesión para acceder');
                window.location.href='./../peche/login.php';
            </script>
        ";        
    }
?>

