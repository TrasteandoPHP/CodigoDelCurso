<?php
    session_start();
	if(isset($_SESSION["bookbusters"]))
    {
        //Sentencias para dar de alta un libro de un usuario dado
        $codLib = $_POST["codigolibro"];
        $codUsu = $_POST["usuario"];
        //Conexión a BBDD en servidor 10.10.10.199 (ordenarod profe)
        // $con = new mysqli("10.10.10.199","busters","1234","biblioteca");
        //Conexión a BBDD servidor en la nuebe IONOS, dominio bookbusters.es
            //Servidor: db5012901176.hosting-data.io Usuario: dbu3726201 Contraseña: PpJ_mP5WdLp!3mPpDb2i@bookaab Bd: dbs10835059
        $con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

        $sqlQuery  = "SELECT * FROM favoritos WHERE cod_lib = '$codLib' AND cod_usu = '$codUsu'";
        $sqlInsert = "INSERT INTO favoritos (cod_usu,cod_lib) VALUES('$codUsu','$codLib')";
        if (! $con->query($sqlQuery)->fetch_array() )
        {
            $con->query($sqlInsert);
            echo "Añadido a favoritos";
        }
        else
        {
            echo "Ya está en favoritos";
        }
    }
    else
    {
        echo "
            <script>
                alert('Area restringida');
                window.location.href='../index.html';
            </script>
        ";
    }

    //Cierre conexión a la BBDD después de todos los accesos 
    $con->close();    
?>