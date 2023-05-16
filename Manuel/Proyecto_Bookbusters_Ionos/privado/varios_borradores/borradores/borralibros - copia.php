<?php
session_start();
if (isset($_SESSION["admin"])) {

    $codlib=$_GET["codigo"];

    $conexion=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
	$sqlborra ="DELETE FROM libros WHERE cod_lib=$codlib";
	$conexion->query($sqlborra);
    
    echo "
    <script>
        alert('Libro eliminado de la base de datos');
        window.location.href='./libros.php';
        </script>
        ";

}
else {
	echo "
		<script>
			alert('Area restringida');
			window.location.href='./login_administrador.html';
		</script>
	";
}

$conexion->close();

?>