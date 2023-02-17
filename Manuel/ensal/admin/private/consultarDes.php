<?php
    session_start();
    if(isset($_SESSION["administrador"])){
        
        $conexion = new mysqli("localhost","root","","ensal");
        header("Content-type: application/vns.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=tabla.xls");
        
?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                
            </head>
            <body>              
                                      
                <table >
                    <thead >
                        <tr>
                            <th>Fecha</th><th>Hora</th><th>Codigo Alumno</th><th>Nombre</th><th>Tipo Registro</th><th style="display:none">DNI Alumno</th>
                        </tr>
                            </thead>
                            <tbody>
<?php
                                    $sqlConsultaRegistros = "SELECT *FROM registros INNER JOIN alumnos USING(cod_alu)";
                                    $ejecutarSqlConsultaRegistros = $conexion->query($sqlConsultaRegistros);
                                    foreach($ejecutarSqlConsultaRegistros as $registro){
                                        $fechaRegistro = $registro["fecha_reg"];
                                        $horaRegistro = $registro["hora_reg"];
                                        $tipoRegistro = $registro["tipo_reg"];
                                        $codigoAlumno = $registro["cod_alu"];
                                        $nombreAlumno = $registro["nom_alu"];
                                        $dniAlumno = $registro["dni_alu"];
?>                                      
                                        <tr>
                                            <td><?php echo $fechaRegistro ?></td>
                                            <td><?php echo $horaRegistro?></td>
                                            <td><?php echo $codigoAlumno?></td>
                                            <td><?php echo $nombreAlumno?></td>
                                            <td><?php echo $tipoRegistro?></td>
                                            <td style="display:none"><?php echo $dni?></td>
                                        </tr>
<?php
                                    }
?>
                                </tbody>
                            </table>
                        
                <script type="text/javascript">
                    
                    $(function(){
                        $("#buscar").quicksearch("table tbody tr");                                             
                    });
                    
                </script> 
            </body>
        </html>                    
<?php     
            
    } else {
        echo "
            <script>
                alert ('Para acceder a esta página tienes que iniciar sesión como Administrador.');
                window.location.href='./../index.html';
            </script>
        "; 
    }        
?>        