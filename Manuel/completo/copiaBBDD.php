<?php
	$conexion = new myqli ("127.0.0.1", "root","","lunes5");
	$aql= "SELECT * FROM alumnos";
	$ejecutar = $conexion->query($sql);
	foreach ($ejecutar as $registro)
	{
		$nom = $registro["nom_alu"];
		$ape = $registro["ape_alu"];
		$nomEncri = $registro["nomencri_alu"];
		$apeEncri = $registro["apeencri_alu"];
		$sqlgraba = "INSERT INTO copia_alumnos (nom_alu, ape_alu, nomencri_alu, apeencri_alu) VALUES ('$nom','$ape','$nomEncri','$apeEncri')";
		$conexion->query($sqlgraba);
	}
?>
