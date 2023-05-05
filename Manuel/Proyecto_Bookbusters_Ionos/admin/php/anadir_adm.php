<?php
    session_start();
    if (isset($_SESSION["admin"]))
    {
        $nom = $_POST["n"];
        $ema = $_POST["e"];
        $pas = password_hash($_POST["p"],PASSWORD_DEFAULT);

        $con = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");

        $sql_comprobar = "SELECT * FROM administradores WHERE email_adm = '$ema'";
        $sql_insertar  = "INSERT INTO administradores (nom_adm, email_adm, pass_adm) VALUES ('$nom','$ema','$pas')";

        if ( !$con->query($sql_comprobar)->fetch_array() )
        {
            if ($con->query($sql_insertar))
            {
                echo "Administrador grabado correctamente";
            }
            else
            {
                echo "Ocurrió un error";
            }
        }
        else
        {
            echo "Ya existe un administrador con ese email";
        }
    $con->close();

    }
    else
    {
        echo "
            <script>
                alert('Area restringida');
                window.location.href='./login_administrador.html';
            </script>
        ";
    }


?>