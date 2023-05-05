<?php
    $codigo_not = $_POST["cod_not"];
    $con = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

    $sql_notif="UPDATE notificaciones
            SET leida_not=1
            WHERE cod_not='$codigo_not'";

    if($con->query($sql_notif))
    {
        echo 1;
    }

?>