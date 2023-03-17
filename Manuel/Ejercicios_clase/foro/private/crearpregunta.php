<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		$codalu = $_SESSION["usuario"];	
		include("funciones.php");
		;
		$reg = hazfetch("alumnos","WHERE cod_alu = '$codalu'");
		$nom = $reg["nom_alu"];
		echo "Hola: $nom - Creando pregunta";
		echo "<hr>";
		?>
		<button onclick="window.location.href='index.php'">Ver preguntas</button><br>
		Crear pregunta
		<br>
		<form action="grabapregunta.php" method="POST">
			<textarea name="pregunta" placeholder="Escribe tu pregunta" style="resize: none;" maxlength="200"></textarea>
			<br>
			<input type="submit" value="Crear">
		</form>
		
		<?php
	}
	else
	{
		header("location:./../index.html");
	}	
?>