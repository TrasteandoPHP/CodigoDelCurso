<?php

    //Datos provenientes de change.php

    $codusu=$_POST["codusu"];    
    $pass=$_POST["pass"];
	
    $pass=password_hash($pass, PASSWORD_DEFAULT);

    $con=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");

    $sql="UPDATE usuarios SET pass_usu='$pass', uniq_usu='' WHERE cod_usu='$codusu'";

    

    if($con->query($sql))
    {
        
    header("location:login.html");

    }
    else
    {
        echo "ocurrió un error";
    }  


    $con->close();




?>