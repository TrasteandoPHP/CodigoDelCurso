<?php
	$codigoDetalleProducto = $_GET["MOCHILA"];
	
	$conexion = new mysqli ("10.10.10.108","escuela","1234","tienda");
	
	$sqlConsultaDetalleProducto = "SELECT * FROM productos WHERE codigo_pro ='$codigoDetalleProducto'";
	$ejecutarConsultaDetalleProducto = $conexion->query($sqlConsultaDetalleProducto);

	$registro = $ejecutarConsultaDetalleProducto->fetch_array();
	
	$nombreProducto = $registro["nombre_pro"];
	$precioProducto = $registro["precio_pro"];
	$descripcionProducto = $registro["descripcion_pro"];
	$codigoCategoria = $registro["codigo_cat"];
	
	$sqlCategoria = "SELECT * FROM categorias WHERE codigo_cat='$codigoCategoria'";
	
	$ejecutarConsultaCategoria = $conexion->query($sqlCategoria);
	
	$registroCategoria = $ejecutarConsultaCategoria->fetch_array();
	
	$nombreCategoria = $registroCategoria["nombre_cat"];
	
	echo "Nombre producto: $nombreProducto";
	echo "Descripcion producto: $descripcionProducto";
	echo "Precio producto: $precioProducto";
	echo "Categoria producto: $nombreCategoria";
?>