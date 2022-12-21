<?php
	$nombrePro = ucfirst($_POST["nombreProducto"]);	
	$descripcionPro = ucfirst($_POST["descripcionProducto"]);	
	$precioPro = $_POST["precioProducto"];	
	$codigoCat = $_POST["codigoCat"];
	
	
	//$conexion = new mysqli("localhost", "escuela", "1234", "tienda");
	$conexion = new mysqli("10.10.10.108", "escuela", "1234", "tienda");
	
	$sqlConsulta = "SELECT nombre_pro FROM productos WHERE nombre_pro ='$nombrePro'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	if($ejecutarConsulta->fetch_array())
	{
			echo "<b>Ese producto ya existe en la Base de Datos.</b>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaProductos.php`'>Volver</button><br><br>";
	}
	else 
	{
		$sqlGrabacion = "INSERT INTO productos(nombre_pro, codigo_cat, descripcion_pro, precio_pro ) VALUES ('$nombrePro', '$codigoCat', '$descripcionPro', '$precioPro')";
	
		if($conexion->query($sqlGrabacion))
		{
			echo "Producto grabado correctamente<br>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaProductos.php`'>Volver</button><br><br>";		
		}
		else
		{
			echo "Error de grabación. Vuelva a intentarlo...";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaProductos.php`'>Volver</button><br><br>";	
		}	
	}
?>