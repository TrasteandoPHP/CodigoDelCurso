<?php
    session_start();
    if(isset($_SESSION["admin"]))
    {
      $codigoAdmin = $_SESSION["admin"];
      include("./php/conexion.php");   
      include("./php/funciones.php");     
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
    <title>Panel Administración</title>
</head>
<body>
    <h1>Bienvenido <?php echo $nombreAdmin;?> al Panel de Administración</h1>
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