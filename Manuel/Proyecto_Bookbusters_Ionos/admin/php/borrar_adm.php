<?php
session_start();
if (isset($_SESSION["admin"]))
{
    $cod = $_POST["codigo"];
    $con = new mysqli("db5012901176.hosting-data.io", "dbu3726201", "PpJ_mP5WdLp!3mPpDb2i@bookaab", "dbs10835059");
    $sql_consulta = "SELECT * FROM administradores WHERE cod_adm = '$cod'";
    $tup = $con->query($sql_consulta)->fetch_array();
    $nom = $tup["nom_adm"];
    $sql_borrar   = "DELETE FROM administradores WHERE cod_adm = '$cod'";
    if ($run = $con->query($sql_borrar))
    {
        echo "$nom ha sido borrado correctamente";
    }
    else
    {
        echo "Ha ocurrido un error en el borrado";
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