<h1>Alta Cliente</h1>
<button onclick="window.location.href='index.html'">Inicio</button>
<button onclick="window.location.href='formularioaltaprovincia.html'">Alta Provincia</button>
<button onclick="window.location.href='formularioaltasexo.html'">Alta Sexo</button>
<button onclick="window.location.href='formularioaltacliente.php'">Alta Cliente</button>
<hr>
<form action="gcliente.php" method="POST">
<input type="text" name="ncli" placeholder="Ingrese Nombre" maxlength="50"><br>
<input type="email" name="ecli" placeholder="Ingrese email" maxlength="50"><br>
<input type="number" name="telfcli" placeholder="Ingrese telefono" maxlength="50"><br>
<input type="password"name="pcli" placeholder="Ingrese password" maxlength="50"><br>

<select name="prov">
<?php
$con =new mysqli("localhost","root","","lunes5"); //hacemos la conexion con la base de datos
$sql="SELECT * FROM provincias";//hacemos la consulta en sql script
$cons= $con->query($sql);//ejecutamos la consulta sql
foreach($cons as $reg)//hacemos el bucle de todos los registros
{
	$cprov=$reg["codigo_pro"];//cargamos codigo de provincia de la tabla
	$nprov=$reg["nombre_pro"];//cargamos nombre de provincia de la tabla
	echo "<option value='$cprov'>$nprov</option>"; // imprimimos en pantalla codigo y nombre
}
//cerramos el php 
?>
</select>
<br>

<?php
$sql = "SELECT * FROM sexo";
$cons= $con->query($sql);
foreach($cons as $reg)
{
	$csex=$reg["codigo_sex"];
	$nsex=$reg["nombre_sex"];
	echo " <input type='radio' name='sexo' value='$csex'>$nsex";
}

?>

<input type="submit" value="Grabar">
</form>