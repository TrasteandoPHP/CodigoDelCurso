<?php
    session_start();
	if(isset($_SESSION["bookbusters"]))
    {
        //Sentencias para borrar de favorito un libro de un usuario dado
        $bajacodlib = $_POST["codigolibro"];
        $bajauser = $_POST["usuario"];
        //Conexión a BBDD en servidor 10.10.10.199 (ordenarod profe)
        // $con = new mysqli("10.10.10.199","busters","1234","biblioteca");
        //Conexión a BBDD servidor en la nuebe IONOS, dominio bookbusters.es
            //Servidor: db5012901176.hosting-data.io Usuario: dbu3726201 Contraseña: PpJ_mP5WdLp!3mPpDb2i@bookaab Bd: dbs10835059
        $con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

        $sqlborrar = "DELETE FROM favoritos WHERE cod_lib='$bajacodlib' AND cod_usu='$bajauser'";
        $ejesqlborrar=$con->query($sqlborrar);
        $sqlcomprobar = "SELECT * FROM favoritos WHERE cod_lib='$bajacodlib' AND cod_usu='$bajauser'";
        if(! $con->query($sqlcomprobar)->fetch_array())
        {
            //No existe el libro y usuario en favoritos
            echo "Libro borrado de favoritos";
        }
        else
        {
            echo "No se ha borrado el libro de favoritos";
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