<?php
if (isset($_POST["mail"]))
{
    $ema = $_POST["mail"];
    $pas = $_POST["pass"];

    $con = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
    $sql = "SELECT * FROM administradores WHERE email_adm = '$ema'";

    $tup = $con->query($sql)->fetch_array();

    if ($tup) {
        $pas_hash = $tup["pass_adm"];
        if (password_verify($pas, $pas_hash)) {
            $cod = $tup["cod_adm"];
            session_start();
            $_SESSION["admin"] = $cod;
            
            header("location: ../index_administrador.php");
        }
        else {
            ?>
                    <script>
                        alert("Las credenciales introducidas son incorrectas");
                        window.location.href="../login_administrador.html";
                    </script>
                <?php
        }
    }
    else {
        ?>
                <script>
                    alert("Las credenciales introducidas son incorrectas");
                    window.location.href="../login_administrador.html";
                </script>
            <?php
    }
    $con->close();
}
else
{
    header("location: ./login_administrador.html");
}


?>