<?php
    session_start();
    if(isset($_SESSION["administrador"])){
        $codigoAdmin = $_SESSION["administrador"];
        
        session_destroy();

        echo "
        <script>
            alert ('Bye bye........sesión cerrada');
            window.location.href='./../index.html';
        </script>
    "; 

    } else {
        echo "
            <script>
                alert ('Para acceder a esta página tienes que iniciar sesión como Administrador.');
                window.location.href='./../index.html';
            </script>
        "; 
    }
?>
