 <?php

	// if(isset($_GET["op"]))
	// {
		// $opcion = $_GET["op"];
	// }
	// else{$opcion ="";}
	// switch($opcion){
			// case 1:
					// $a = "";
					// $b = "style='display:none'";
					// $c = "style='display:none'";
					// $m = "style='display:none'";
					// break;
			// case 2:
					// $c = "";
					// $a = "style='display:none'";
					// $b = "style='display:none'";
					// $m = "style='display:none'";
					// break;
			// case 3:
					// $m = "";
					// $a = "style='display:none'";
					// $b = "style='display:none'";
					// $c = "style='display:none'";
					// break;
			// case 4:
					// $b = "";
					// $a = "style='display:none'";
					// $c = "style='display:none'";
					// $m = "style='display:none'";
					// break;
			// default:
					// case 2:
					// $c = "style='display:none'";
					// $a = "style='display:none'";
					// $b = "style='display:none'";
					// $m = "style='display:none'";
					// break;
	// }	
?>

<div class="menu" >
	<button onclick="" style="width:19%;">Inicio</button>
	<button onclick="encender('altas')" style="width:19%;">Altas</button>
	<button onclick="encender('consultar')" style="width:19%;">Consultar</button>
	<button onclick="encender('modificar')" style="width:19%;">Modificar</button>
	<button onclick="encender('borrar')" style="width:19%;">Borrar</button>
	<h4><center><?php echo $nomadm;?></center></h4>
</div>
<div class="submenu" id="altas" style="display:none">
	<button onclick="" style="width:49%;">Categorías</button>
	<button onclick="" style="width:49%;">Productos</button>
</div>
<div class="submenu" id="consultar" style="display:none">
	<button onclick="" style="width:33%;">Categorías</button>
	<button onclick="" style="width:33%;">Productos</button>
	<button onclick="" style="width:33%;">Administradores</button>
</div>
<div class="submenu" id="modificar" style="display:none">
	<button onclick="" style="width:49%;">Categorías</button>
	<button onclick="" style="width:49%;">Productos</button>
</div>
<div class="submenu" id="borrar" style="display:none">
	<button onclick="" style="width:49%;">Categorías</button>
	<button onclick="" style="width:49%;">Productos</button>
</div>


