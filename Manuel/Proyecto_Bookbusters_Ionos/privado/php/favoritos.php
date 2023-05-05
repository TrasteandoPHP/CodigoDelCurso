<?php
  session_start();
  if(isset($_SESSION["bookbusters"])) {
    $con = new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
    $sql = "SELECT * FROM favoritos WHERE cod_usu = '1'"; 
    foreach ($con->query($sql) as $tup)
    {
        $fav = $tup["cod_lib"];
        echo $fav."@";
        
    }
    $con->close();
}
else
{
  header("location:../../login.html");
}     
?>