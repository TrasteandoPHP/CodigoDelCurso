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
            $sqlConsultaAnuncios = "SELECT * FROM anuncios";
            $ejecutarConexionConsultaAnuncios = $conexion->query($sqlConsultaAnuncios);
            foreach($ejecutarConexionConsultaAnuncios as $registro)
            {  
                // Voy a extraer los datos
                $titulo = $registro["nom_anu"];
                $precio = $registro["precio_anu"];
                $codigo = $registro["cod_anu"]; 
                
                // Utilizo el código para buscar la imagen
                $sqlConsultaImagen = "SELECT * FROM imagenes WHERE cod_anu='$codigo'";
                $ejecutaConsultaImagen = $conexion->query($sqlConsultaImagen);
                $registroImagen = $ejecutaConsultaImagen->fetch_array();
                $imagen = $registroImagen["nom_ima"];
                $ruta = "./imagenes/$codigo/$imagen";
        ?>
            <div class="anuncio">
                <div class="imagen">
                    <img src="<?php echo $ruta?>" alt="">
                </div> <!-- div.imagen -->
                <div class="titulo">
                    <h2><?php echo $titulo ?></h2>
                </div> <!-- div.titulo -->
                <div class="precio">
                    <p>Precio: <?php echo $precio ?>/persona</p>
                </div> <!-- div.precio -->
                <div class="boton">
                    <button onclick="window.location.href='ver.php?cod=<?php echo $codigo;?>'">Ver</button>
                </div> <!-- div.boton -->
            </div> <!-- div.anuncio -->    
           
        <?php
            }
        ?> 
        </div> <!-- div.anuncio -->    
    </body>
</html>