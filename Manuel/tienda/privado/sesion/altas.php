<?php
    session_start();
    if(isset($_SESSION["admin"]))
    {
      $codigoAdmin = $_SESSION["admin"];        
      include("./../php/funciones.php");     
      $registroAdmin = existe("administradores","WHERE cod_adm='$codigoAdmin'");
      $nombreAdmin = $registroAdmin["nom_adm"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>        
        <link rel="stylesheet" href="./../css/style.css">
        <title>Panel Administración</title>
    </head>
    <body>
        <?php
            include("./menu.php");
        ?>

        <div class="options-container">
            <?php
                $accion = $_GET["accion"];
                $codigo = $_GET["codigo"];
                
                if($codigo==1){
                    echo "
                    <form>
                        <fieldset>
                            <legend>$accion - Categorias</legend>
                            <input type='text' id='nom_cat' placeholder='Nombre Categoria'>
                            <br>                        
                            <input type='button' value='Registrar' onclick='login()'>
                        </fieldset>
                        
                    </form>                
                    ";                
                } else {
                    echo "
                        <form>
                            <fieldset>
                                <legend>$accion - Productos</legend>
                                <input type='text' id='nombre' placeholder='Nombre Producto'>
                                <br>
                                <input type='text' id='descripcion' placeholder='Descripción Producto'>
                                <br>
                                <input type='text' id='precio' placeholder='Precio Producto'>
                                <br>                        
                                <input type='button' value='Registrar' onclick='login()'>
                            </fieldset>                    
                        </form>               
                    ";            
                }
            ?>       
        </div>
        
        <script src="./../js/funciones.js"></script>
    </body>
</html>
<?php
    } 
    else {
        echo "<script>
                alert('No tiene permisos');
                window.location.href='./../index.html';
              </script>";
    }   
?>