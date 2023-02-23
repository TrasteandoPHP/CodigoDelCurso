<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <title>Instalador</title>
    </head>
    <body>
        <div class="container" style="height:100vh">
            <div class="row" style="height:100vh">
                <div class="offset-3 col-12 col-md-6 mt-5 pt-5">
                    <?php
                        // Recoger los datos del formulario por POST.
                        $nombrePrograma = $_POST["nombrePrograma"];
                        $nombreAdmin = $_POST["nombreAdmin"];
                        $emailAdmin = $_POST["emailAdmin"];
                        $passwordAdmin = $_POST["passwordAdmin"];
                        $descripcionPrograma = $_POST["descripcionPrograma"];

                        // Hasheamos el password.
                        $passwordEncriptada = password_hash($passwordAdmin, PASSWORD_DEFAULT);

                        // Creamos conexión.
                        $conexion = new mysqli("localhost","root","","manuelcp");

                        // Hay que comprobar que el correo de administrador no está duplicado.

                        // Crear la tabla administradores e insertar el admin dado.
                        $sqlCrearTablaAdmin = "CREATE TABLE if not exists administradores(
                                                    cod_adm int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,                                        
                                                    nom_adm varchar(50) NOT NULL,
                                                    email_adm varchar(100) NOT NULL,
                                                    pass_adm varchar(100) NOT NULL                              
                        )";

                        // Ejecutar creación tabla administradores.
                        if($conexion->query($sqlCrearTablaAdmin)){

                        echo "<div class='alert alert-success' role='alert'>Tabla Administradores creada correctamente.<br></div>";    
                        

                            // Crear SQL grabación datos administrador.
                            $sqlGrabacionAdmin = "INSERT INTO administradores(nom_adm, email_adm, pass_adm) 
                                                    VALUES('$nombreAdmin','$emailAdmin','$passwordEncriptada')";

                            // Ejecutar grabación administrador.
                            if($conexion->query($sqlGrabacionAdmin)){
                                echo "<div class='alert alert-success' role='alert'>Administrador grabado correctamente.<br></div>";    
                            

                                // Crear la tabla identidad.
                                $sqlCrearTablaIndentidad = "CREATE TABLE if not exists identidad(
                                    cod_prg int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,                                        
                                    nom_prg varchar (50) NOT NULL,
                                    desc_prg varchar(200) NOT NULL                            
                                )";

                                // Ejecutar crear tabla identidad.
                                if($conexion->query($sqlCrearTablaIndentidad)){
                                    echo "<div class='alert alert-success' role='alert'>Tabla identidad creada correctamente.<br></div>"; 
                                
                                    // Crear SQL grabación datos programa.
                                    $sqlGrabacionPrograma = "INSERT INTO identidad(nom_prg, desc_prg) VALUES ('$nombrePrograma','$descripcionPrograma')"; 
                                
                                    // Ejecutar grabación datos programa.
                                    if($conexion->query($sqlGrabacionPrograma)){
                                    echo "<div class='alert alert-success' role='alert'>Datos de programa grabados correctamente.<br></div>";     
                                    

                                    // Crear la tabla productos.
                                    $sqlCrearTablaProductos = "CREATE TABLE if not exists productos(
                                        cod_pro int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,                                        
                                        nom_pro varchar (50) NOT NULL,
                                        desc_pro varchar(200) NOT NULL,
                                        img_pro varchar(50) NOT NULL                            
                                    )";

                                        // Ejecutar crear tabla productos.
                                        if($conexion->query($sqlCrearTablaProductos)){
                                            echo "<div class='alert alert-success' role='alert'>Tabla productos creada correctamente.<br></div>";    
                                            
                                            // Vamos a crear la carpeta en donde se van a guardar las imagenes.
                                            $ruta = "./../imagenes/";
                                            if (!file_exists($ruta)) {
                                                mkdir($ruta, 0777, true);
                                                echo "<div class='alert alert-success' role='alert'>Carpeta imagenes creada correctamente.<br></div>";    
                                            } else {

                                                echo "<div class='alert alert-danger' role='alert'>La carpeta imagenes ya existe.<br></div>";                                                  
                                            }                                       
                                            
                                            echo "<div class='alert alert-primary' role='alert'>La instalación ha finalizado.<br></div>";
                                            
                                        } else {
                                            echo "<div class='alert alert-danger' role='alert'>Error al crear la tabla productos.<br></div>"; 
                                        }

                                    } else {
                                        echo "<div class='alert alert-danger' role='alert'>Error al grabar datos de programa en tabla identidad.<br></div>";                           
                                    }

                                } else {
                                    echo "<div class='alert alert-danger' role='alert'>Error al crear la tabla identidad.<br></div>";                         
                                } 
                                
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>Error al grabar en tabla administradores.<br></div>";                      
                            }

                        } else {
                            echo "<div class='alert alert-danger' role='alert'>Error al crear la base de datos Administradores.<br></div>";                
                        }               
                    ?>
                </div>       
            </div>
        </div>
    </body>
</html>