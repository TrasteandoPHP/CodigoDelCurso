<?php
session_start();
if (isset($_SESSION["bookbusters"]))
{
    $codigo_usu = $_SESSION["bookbusters"];
    $con = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

    $sql_notif="SELECT * FROM notificaciones 
            WHERE  cod_usu='$codigo_usu'";

    $ejec_notif=$con->query($sql_notif);

    foreach ($ejec_notif as $reg_notif)
        {
            $control=$reg_notif["leida_not"];
            if ($control==0){
                echo $reg_notif['cod_not'];
            }
        }
}
?>