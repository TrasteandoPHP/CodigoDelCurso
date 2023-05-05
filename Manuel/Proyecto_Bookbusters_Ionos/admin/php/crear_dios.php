<?php
    $con = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
    $pas = password_hash("1234",PASSWORD_DEFAULT);
    $sql = "INSERT INTO administradores (nom_adm, email_adm, pass_adm) VALUES ('dios','dios.com','$pas')";
    $con->query($sql);
    $con->close();
?>