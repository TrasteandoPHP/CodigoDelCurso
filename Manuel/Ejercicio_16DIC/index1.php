<html>
	<head>
		<meta charset="UTF-8">		
	</head>
	<body>
		<h1>Index Crear Tabla</h1>
		<?php
			include("./funciones/functions1.php");			
			inicio_tabla(1);
				inicio_fila();
					pinta_celda("3","Comidas");
				fin_fila();
				inicio_fila();
					pinta_celda("","Lunes");
					pinta_celda("","Martes");
					pinta_celda("","Miércoles");
				fin_fila();
				inicio_fila();
					pinta_celda("","Desayuno");
					pinta_celda("","Desayuno");
					pinta_celda("","Desayuno");
				fin_fila();
			fin_tabla();
			echo"<br>";
			crearTabla(1, 5, "desayuno");
		?>
		<br>
		<hr>		
	</body>
</html>