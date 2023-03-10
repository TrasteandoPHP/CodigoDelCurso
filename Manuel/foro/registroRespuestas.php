<!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                    <title>Registro Respuestas</title>
                </head>
                <body>
                    <div class="container">                        
                        <div class="row">
                            <div class="offset-1 col-10 text-center">                                
                                <h1 class="text-center mt-5 pb-3">Envío de Respuestas</h1>
                                <form class="text-center" action="./grabaRespuestas.php" method="POST">
                                    <select class="float-start offset-2 col-4 text-center p-1" name="mensaje" required>
                                        <option value="">Elige un Mensaje</option>
                                        <?php                                            
                                            $conexion = new mysqli ("localhost","root","","escuela");
                                            $sqlConsultaMensajes = "SELECT * FROM mensajes";
                                            $ejecutarSqlConsultaMensajes = $conexion->query($sqlConsultaMensajes);
                                            foreach($ejecutarSqlConsultaMensajes as $registro){
                                                $codigoMensaje = $registro["cod_men"];
                                                $mensaje = $registro["txt_men"];
                                                echo "<option value='$codigoMensaje'>$mensaje</option>";
                                            }                        
                                        ?>
                                    </select>
                                    
                                    <select class="float-start col-4 text-center p-1" name="alumno" required>
                                        <option value="">Elige un Alumno</option>
                                        <?php
                                            $conexion = new mysqli ("localhost","root","","escuela");
                                            $sqlConsultaAlumnos = "SELECT * FROM alumnos";
                                            $ejecutarSqlConsultaAlumnos = $conexion->query($sqlConsultaAlumnos);
                                            foreach($ejecutarSqlConsultaAlumnos as $registro){
                                                $codigoAlumno = $registro["cod_alu"];
                                                $nombreAlumno = $registro["nom_alu"];
                                                echo "<option value='$codigoAlumno'>$nombreAlumno</option>";
                                            }                        
                                        ?>                        
                                    </select>
                                    <br><br>                                    
                                    <textarea id="respuesta" name="respuesta" rows="3" cols="75"></textarea>
                                    <input type="submit" class="btn btn-success col-8 my-3" value="Registrar">
                                </form>
                                <br><br>
                                <div class="row offset-5 col-10">
                                    <button class="btn btn-light col-2" onclick="window.location.href='./index.html'">Inicio</button>
                                </div> 
                            </div>
                        </div>
                    </div>                    
                </body>
            </html>