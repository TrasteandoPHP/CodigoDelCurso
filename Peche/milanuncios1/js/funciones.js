function unomas(){
	//creo variables
	var contador;
	var cajetin;
	//en la variable contador guardo el valor del input con id numero. Y LO CONVIERO A NÚMERO->parseint
	contador = parseInt($("input#numero").val());
	//al contador le sumo 1
	contador = contador + 1;
	//el cambio el valor al input de id numero	
	$("input#numero").val(contador);
	//a la variable cajetin le añado el código de un input type file y le concateno el contador al name
	cajetin = "<input type='file' name='archivo"+contador+"'>";
	//al div con clase add, le añado al final el cajetin (input type file)
	$("div.add").append(cajetin);
}