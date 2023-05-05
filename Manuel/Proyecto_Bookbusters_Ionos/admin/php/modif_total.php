<?php
    $cod_usu=$_POST["c"];
    $nom_usu=$_POST["n"];
    $ape1_usu=$_POST["a1"];
    $ape2_usu=$_POST["a2"];
    // $email_usu=$_POST["e"];
    
    $con = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
    $sql_modif="UPDATE usuarios
                SET nom_usu='$nom_usu',ap1_usu='$ape1_usu',ap2_usu='$ape2_usu'
                WHERE cod_usu='$cod_usu'";
    $ej_modif=$con->query($sql_modif);
    $con->close();
    echo "a";
    ?>