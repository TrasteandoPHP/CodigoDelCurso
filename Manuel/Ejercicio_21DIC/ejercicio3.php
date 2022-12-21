<?php
	// Ejercicio 3: Consultar todos los datos de la tabla empleados.
	
	 echo "Consultar todos los datos de la tabla empleados<br>";
	 echo "--------------------------------------------------------------";
	 echo "<br>";
	 
	 // Consultando todos los datos de la tabla empleados
	 $conexion = new mysqli("10.10.10.199","alfonso","123456","examen");
	 $sqlConsultaDatosEmpleados = "SELECT * FROM empleados";
	 $ejecutarConsultaEmpleados = $conexion->query($sqlConsultaDatosEmpleados);
		 
	 // consultado el nombre de los campos de la tabla empleados
	 $sqlconsultacamposbd = "show columns from empleados";
	 $ejecutarconsultacamposbdempleados = $conexion->query($sqlconsultacamposbd);
	 $tabla="empleados";
	 $campos="";
	 $arrayCampos = array();
	 foreach($ejecutarconsultacamposbdempleados as $c)
	 {
		 $campos.=$c["Field"].",";	
		 array_push($arrayCampos,$c["Field"]);	
	 }
		
	 $campos = substr($campos,0,-1);	 
	 
	 // Pintando los datos de encabezado en una tabla
	 echo "<table border=1>";
	 echo "<tr>";
	 foreach($arrayCampos as $c)
	 {
		 echo "<th><center>".$c."</center></th>";
	 }
	 echo "</tr>";	
	 
	 // Extrayendo y  pintando los datos de empleados en una tabla
	 
	 foreach($ejecutarConsultaEmpleados as $datos)
	 {
		 echo "<tr>";
		 foreach($datos as $empleado)
		 {
			echo "<td><center>$empleado</center></td>";
         }		 
	 }	
	 echo "</tr>";
	  echo "<table>";
?>