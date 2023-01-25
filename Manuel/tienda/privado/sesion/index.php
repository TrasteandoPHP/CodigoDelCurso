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
    <div class="menu-container">
        <h1>Bienvenido al Panel de Administración</h1>  
        <ul>
            <li><button>Inicio</button></li>
            <li><button onmouseover="mostrar('altas')" onmouseleave="ocultar('altas')">Altas</button></li>
            <li><button onmouseover="mostrar('consultar')" onmouseleave="ocultar('consultar')">Consultar</button></li>
            <li><button>Modificar</button></li>
            <li><button>Borrar</button></li>
            <li><button><?php echo $nombreAdmin ?></button></li>        
        </ul>
    </div>
    <div class="submenu-container">
        <ul id="altas">
            <br>
            <li><button>Categorias</button></li>
            <li><button>Productos</button></li>
        </ul>
        <ul id="consultar">
            <br>
            <li><button>Categorias</button></li>
            <li><button>Productos</button></li>
            <li><button>Administradores</button></li>
        </ul>
    </div>

    <script>
        function mostrar(id){    
        $(".submenu-container").show();         
        $("#"+id).show();  
       }

        function ocultar(id){
            $(".submenu-container").hide();
        $("#"+id).hide(); 
        }  
    </script>
    
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
