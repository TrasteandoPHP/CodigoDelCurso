<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./js/jquery-3.6.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <title>Consulta</title>
    </head>
    <body>
        <div class="todo">
       
            <?php
                include ("./php/conexion.php");
                $codigo = $_GET["codigo"];

                // Crear y ejecutar consulta de anuncio
                $sqlConsultaAnuncio = "SELECT * FROM anuncios WHERE cod_anu='$codigo'";
                $ejecutarConexionConsultaAnuncio = $conexion->query($sqlConsultaAnuncio);
                $registro = $ejecutarConexionConsultaAnuncio->fetch_array();

                // Voy a extraer los datos
                $titulo = $registro["nom_anu"];
                $precio = $registro["precio_anu"];
                $descripcion = $registro["des_anu"]; 
            ?>
            <div class="VerAnuncio">
                <div class="titulo">
                    <h2><?php echo $titulo ?></h2>
                </div> <!-- div.titulo -->
                <p><?php echo $descripcion;?></p>
                <div class="precio">
                    <p>Precio: <?php echo $precio ?>/persona</p>
                </div> <!-- div.precio -->
                <br><br><br>
        
                <?php
                    // Crear y ejecutar consulta de imagenes
                    $sqlConsultaImagenes = "SELECT * FROM imagenes WHERE cod_anu='$codigo'";
                    $ejecutarConsultaImagenes = $conexion->query($sqlConsultaImagenes);

                    foreach($ejecutarConsultaImagenes as $registroImagen)
                    { 
                        $imagen = $registroImagen["nom_ima"];
                        $ruta = "./imagenes/$codigo/$imagen";                       
                ?>

                    <div class="imagen">
                        <img src="<?php echo $ruta?>" alt="">
                    </div> <!-- div.imagen -->             
                    
                <?php
                    }
                ?> 
                <div class="boton">
                    <button onclick="window.location.href='./consulta.php'">Volver</button>                    
                </div> <!-- div.boton -->
            </div> <!-- div.anuncio -->           
        </div> <!-- div.todo -->    
    </body>
</html>