<!DOCTYPE HTML>
<html>
	<head>
		<title>Alta Alumnos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Registro Alumnos</h2>
								<form method="POST" action="grabaAlumnos.php">
									<div class="fields">
										<div class="field half">
											<input type="text" name="nombre" id="nombre" placeholder="Nombre" required/>
										</div>
										<div class="field half">
											<input type="text" name="dni" id="dni" placeholder="DNI" required/>
										</div>
										<div class="field">
											<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required/>
										</div>										
										<div class="field half">
											<input type="password" name="pass" id="pass" placeholder="Password" required/>
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="email" required/>
										</div>
										<div class="field">
											<select class="field" name="cod_cur" required>
												<?php
													$conexion = new mysqli("localhost","root","","academia");
													$sqlConsultaCursos = "SELECT * FROM cursos ORDER BY nom_cur ASC";
													$ejecutarConsultaCursos = $conexion->query($sqlConsultaCursos);
													echo "<option value=''> --- Elige un Curso --- </option>";	
													foreach($ejecutarConsultaCursos as $registroCursos)
													{
														$cod_cur = $registroCursos["cod_cur"];
														$nom_cur = $registroCursos["nom_cur"];																											
														echo "<option value='$cod_cur'>$nom_cur</option><br>";
													}					
												?>	
											</select>
										</div>									
									</div> <!-- div.fields -->
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="primary" /></li>
									</ul>
								</form>
							</section>
							
							<ul class="copyright">
								<li>&copy; 2023. All rights reserved</li><li>Design by: Fondo SUR Team</li>
							</ul>
						</div>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>