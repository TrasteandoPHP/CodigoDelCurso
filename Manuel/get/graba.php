<?php
	$conexion = new mysqli("127.0.0.1","root","","get");
	$whatForm = $_GET["whatForm"];
	
	switch($whatForm)
	{
		case 1:
			$dni = $_POST["dni"];
			$nombre = $_POST["nombre"];
			$sql = "INSERT INTO clientes(dni_cli, nombre_cli) VALUES ('$dni', '$nombre')";
			$mensaje = "Cliente Grabado";
			$mostrar = "Consultar Clientes";
			$direccion = "./privado/consultaClientes.php";
			break;
		case 2:
			$precio = $_POST["precio"];
			$descripcion = $_POST["descripcion"];
			$sql = "INSERT INTO productos(precio_pro, descripcion_pro) VALUES ('$precio', '$descripcion')";
			$mensaje = "Producto Grabado";
			$mostrar = "Consultar Productos";
			$direccion = "./privado/consultaProductos.php";
			break;
		case 3:
			$categoria = $_POST["categoria"];
			$sql = "INSERT INTO categorias(nombre_cat) VALUES ('$categoria')";
			$mensaje = "Categoria Grabada";
			//$boton = "<button onclick='window.location.href=`./privado/consultaCategorias.php`'>Consultar Categorias</button>"";
			$mostrar = "Consultar Categorias";
			$direccion = "./privado/consultaCategorias.php";
			break;
	}
	
	if($conexion->query($sql))
		{
			echo "$mensaje<br>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`$direccion`'>$mostrar</button>";		
		}
		else
		{
			echo "Error de grabación. Vuelva a intentarlo...";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularios.html`'>Volver</button>";	
		}	


?>