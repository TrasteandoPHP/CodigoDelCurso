<?php
	include("./funciones.php");
	
	// tabla PERSONAS 
	$tablaPersonas="personas";
	$array1 = array("nom_per","prov_per","ciudad_per","cp_per","email_per","pass_per");
	$arrayDatosPersona = array("Manuel","A Coruña","La Coru","15000","manuel@correo.com","1234");
	
	$var_array1="";
	$var_arrayDatosPersona="";
				
	foreach($array1 as $a1)
		{
			$var_array1.= "$a1, ";
		}
	echo "$var_array1<br><br>";
	$camposPersonas = substr($var_array1,0,-2);
	echo "<b>$camposPersonas</b><br><br>";

	foreach($arrayDatosPersona as $a1)
		{
			$var_arrayDatosPersona.= "'$a1', ";
		}
	echo "$var_arrayDatosPersona<br><br>";
	$valoresPersonas = substr($var_arrayDatosPersona,0,-2);
	echo "<b>$valoresPersonas</b><br><br>";	

	grabarSQL($tablaPersonas, $camposPersonas, $valoresPersonas );
		
	echo "<br><hr>";
	
	//---------------------------------------------------------------------------------------
		
	// tabla CATEGORIAS
	$tablaCategorias="categorias";
	$array2 = array("nom_cat","descri_cat");
	$arrayDatosCategoria = array("Alimentación","todo lo de comer...");
		
	$var_array2="";	
	$var_arrayDatosCategoria="";
		
	foreach($array2 as $a2)
		{
			$var_array2.= "$a2, ";
		}
	echo "$var_array2<br><br>";
	$camposCategoria = substr($var_array2,0,-2);
	echo "<b>$camposCategoria</b><br><br>";

	foreach($arrayDatosCategoria as $a2)
		{
			$var_arrayDatosCategoria.= "'$a2', ";
		}
	echo "$var_arrayDatosCategoria<br><br>";
	$valoresCategoria = substr($var_arrayDatosCategoria,0,-2);
	echo "<b>$valoresCategoria</b><br><br>";	

	grabarSQL($tablaCategorias, $camposCategoria, $valoresCategoria);
		
	echo "<br><hr>";
	
	//---------------------------------------------------------------------------------------
	// Realizando Consulta con bucle FOREACH
	//---------------------------------------------------------------------------------------
	/*
	$conexion = new mysqli("10.10.10.199","Medellin","1234","martes20");
	$sqlConsulta = "SELECT * FROM personas";
	$ejecutarConsulta = $conexion->query($sqlConsulta);
	
	foreach($ejecutarConsulta as $registro)
	{
		//sacamos los datos
		foreach($array1 as $c)
		{
			echo $registro[$c]." ";
		}
		echo "<br>";
	}
	
	echo "<br><hr>";
	*/
	//---------------------------------------------------------------------------------------
	// Realizando el mismo ejercicio con un bucle FOR
	//---------------------------------------------------------------------------------------
	// tabla PERSONAS 
	$tablaPersonas = "personas";
	$array1 = array("nom_per","prov_per","ciudad_per","cp_per","email_per","pass_per");
	$arrayDatosPersona = array("Manuel","A Coruña","La Coru","15000","manuel@correo.com","1234");
	$campos="";
	$valores="";
	
	for($i=0; $i<count($array1); $i++)
	{
		$campos.="$array1[$i], ";
		$valores.="'$arrayDatosPersona[$i]', ";
	}
	echo $campos."<br><br>";
	$campos=substr($campos,0,-2)."<br>";
	echo "<b>$campos</b><br>";
	echo $valores."<br><br>";
	$valores=substr($valores,0,-2)."<br>";
	echo "<b>$valores</b><br>";
	grabarSQL($tablaPersonas,$campos,$valores);	
	
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	// Queda pendiente de arreglarlo cuando veamo las variables dinámicas.
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*
	$array1 = array("nom_per","prov_per","ciudad_per","cp_per","email_per","pass_per");
	$datos1 = array("Manuel","A Coruña","La Coru","15000","manuel@correo.com","1234");
	$array2 = array("nom_cat","descri_cat");
	$datos2 = array("Alimentación","todo lo de comer...");
	
	$tabla1 = "personas";
	$tabla2 = "categorias";
	for($i=1;$i<3;$i++)
	{
		$campos.$i = "";
		echo "$campos.$i<hr>";
		foreach($array.$i as $c)
		{
			$campos.$i.="$c, "; 
		}
		$valores.$i = "";
		
		foreach($datos.$i as $v)
		{
			$valores.$i.="'$v', ";
		}
		$campos.$i = substr($campos.$i,0,-2);
		$valores.$i = substr($valores.$i,0,-2);
		echo $campos=substr($campos,0,-2)."<br>";	
		echo $valores=substr($valores,0,-2)."<br>";
		//grabarSQL($tabla.$i, $campos.$i, $valores.$i);	
	}
*/	
?>