<?php
session_start();
if(isset($_SESSION['bookbusters']))
{
    $codusuario = $_SESSION['bookbusters'];
    $imagen = $_POST["pic"];

    $conexion = new mysqli ("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
    $buscaimg = "update usuarios set img_usu = '$imagen' where cod_usu = $codusuario";
    $conexion->query($buscaimg);
}
else
{
	echo "
		<script>
			alert('Area restringida');
			window.location.href='../login.html';
		</script>
	";
}

?>