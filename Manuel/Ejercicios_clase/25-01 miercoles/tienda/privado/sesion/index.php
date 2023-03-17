<?php
	session_start();
	if(isset($_SESSION["admin"]))
	{	
		$codadm = $_SESSION["admin"];
		include("./../php/funciones.php");
		
		$guardar = existe("administradores","WHERE cod_adm = '$codadm'");
		$nomadm = $guardar["nom_adm"];
		
		
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<meta charset="UTF-8">
	</head>
	<body>
	<?php
		include("./menu.php");
	?>	
	
	
	<script src="./../js/funciones.js"></script>
	</body>
</html>
<?php
	}
	else
	{
		echo "
			<script>
				alert('No tienes permisos');
				window.location.href='./../index.html';
			</script>
			";
	}

?>






