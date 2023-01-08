<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://kit.fontawesome.com/d26416aa87.js" crossorigin="anonymous"></script>
        <title>Asignaturas</title>
    </head>
    <body>
        <div class="primary-container asignaturas">
            <nav class="menuNavegacion">
                <div class="home">
                    <a href="../index.html">
                        <i class="fa-solid fa-house icon" title="Home"></i>                
                    </a>
                </div>
                <div class="links">
                    <a href="./formAltaAlumnos.html">
                        <i class="fa-solid fa-users icon" title="Alta Alumnos"></i>                
                    </a>
                    <a href="./formAltaProfesores.html">
                        <i class="fa-solid fa-user-tie icon" title="Alta Profesores"></i>                
                    </a>
                    <a href="./formAltaAsignaturas.php">
                        <i class="fa-solid fa-book icon" title="Alta Asignaturas"></i>               
                    </a>
                </div>
            </nav>
            <hr>
            <div class="tituloMenu">
                <h2>Alta Asignaturas</h2>            
            </div>
            <div class="form-container">                
                <form action="../php/altaAsignaturas.php" method="POST">  
                    <fieldset>
                        <legend><b>Datos Asignatura</b></legend>
                        <div class="fieldForm">
                            <label>Nombre:</label>
                            <input size="20" maxlength="20" type="text" name="nombre" required><br>
                        </div>   
                        <div class="fieldForm">
                            <label>Horas Totales:</label>
                            <input size="4" maxlength="4" type="text" name="horas" required><br>
                        </div>   
                        <div class="fieldForm">
                            <label>Titular Asignatura:</label>&nbsp;
                            <select name="cod_prof" required>
                                <?php
                                    $conexion = new mysqli("localhost","root","","centro_estudios");
                                    $sqlConsultaProfesores = "SELECT * FROM profesores ORDER BY nom_prof ASC";
                                    $ejecutarConsultaProfesores = $conexion->query($sqlConsultaProfesores);
                                    echo "<option disabled selected value> --- Elige un Profesor --- </option>";
                                    foreach($ejecutarConsultaProfesores as $registro)
                                    {
                                        $cod_prof = $registro["cod_prof"];
                                        $nom_prof = $registro["nom_prof"];
                                        $ape_prof = $registro["ape_prof"];
                                        
                                        echo "<option value='$cod_prof'>$nom_prof $ape_prof</option><br>";
                                    }					
                                ?>	
                            </select> 
                        </div>
                    </fieldset>    
                    <div>
                        <input class="registerButton" type="submit" value="Registrar" />	
                    </div>	                     
                </form>           
            </div>                
        </div>        
    </body>
</html>