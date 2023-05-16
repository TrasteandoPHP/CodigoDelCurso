<?php
session_start();
if (isset($_SESSION["admin"])) {

    $codlib=$_GET["codigo"];

    $conexion=new mysqli("db5012901176.hosting-data.io","dbu3726201","PpJ_mP5WdLp!3mPpDb2i@bookaab","dbs10835059");
    //Previamente a la baja del libro se consulta en la tabla libros si el libro está reservado o entregado, es decir no está disponible     
    $sql="SELECT FROM libros WHERE cod_lib=$codlib";
    if($conexion->query($sql)->fetch_array())
    {
        echo "
    <script>
        alert('El libro está reservado o está prestado por lo que no se puede eliminar de la base de datos hasta que haya sido devuelto');
        window.location.href='./libros.php';
        </script>
        ";
    }
    else
    {   
	$sqlborra ="DELETE FROM libros WHERE cod_lib=$codlib";
	$conexion->query($sqlborra);
    
    echo "
    <script>
        alert('Libro eliminado de la base de datos');
        window.location.href='./libros.php';
        </script>
        ";
    }
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