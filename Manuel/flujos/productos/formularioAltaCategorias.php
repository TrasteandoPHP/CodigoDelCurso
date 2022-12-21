<?php
	$nombreCat = Ucfirst($_POST["nombreCategoria"]);	
	$conexion = new mysqli("localhost", "escuela", "1234", "tienda");
	//$conexion = new mysqli("10.10.10.108", "escuela", "1234", "tienda");
	
	$sqlConsulta = "SELECT nombre_cat FROM categorias WHERE nombre_cat ='$nombreCat'";
	$ejecutarConsulta = $conexion->query($sqlConsulta);	
	
	if($ejecutarConsulta->fetch_array())
	{
			echo "<b>Esta categoria ya existe en la Base de Datos.</b>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaCategorias.html`'>Volver</button><br><br>";
	}
	else 
	{
		$sqlGrabacion = "INSERT INTO categorias(nombre_cat) VALUES ('$nombreCat')";
	
		if($conexion->query($sqlGrabacion))
		{
			echo "Categoria grabada correctamente<br>";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaCategorias.html`'>Volver</button><br><br>";		
		}
		else
		{
			echo "Error de grabación. Vuelva a intentarlo...";
			echo "<br><br>";
			echo "<button onclick='window.location.href=`./formularioAltaCategorias.html`'>Volver</button><br><br>";	
		}	
	}	
?>