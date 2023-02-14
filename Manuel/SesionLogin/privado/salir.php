<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["usuario"])){
            $codigo = $_SESSION["usuario"];

            // Posibilidad de actualizar el perfil en la desconexion o grabar la hora de desconexion.
        session_destroy();
        echo "
            <script>
                alert('Te has desconectado');
                window.location.href='./../index.html';            
            </script>        
        ";    

        } else {
            echo "
                <script>
                    alert('No hay sesión. No puedes estar aquí');
                    window.location.href='./../index.html';            
                </script>        
            ";    
        }   
    ?>
</body>
</html>