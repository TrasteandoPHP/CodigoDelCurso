<?php
session_start();
if (isset($_SESSION["admin"])) {

    $codlib=$_GET["codigo"];

    $conexion=new mysqli("10.10.10.199","busters","1234","biblioteca");
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
?>