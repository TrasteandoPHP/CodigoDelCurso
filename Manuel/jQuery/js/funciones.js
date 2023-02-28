function limpiar(){
    $("#pantalla").val("");                              
}

function limpiarInput(){
    $("input").val("");
}

function linkVisitado(id){
    limpiar();
    let linkVisitado = $("#link"+id).attr("href");
    // Para recoger el id que viene de la función como "this.id" cambiar a $("#"+id)
    $("#pantalla").val(linkVisitado);
}

function imagenVisitada(id){
    limpiar();
    //let imgVisitada = $('#'+id).attr("src");
    let imgVisitada = $("#img"+id).attr("src");
    $("#pantalla").val(imgVisitada);
    let mostrarImagen = "<img width='100%' src='"+imgVisitada+"'>";
    $("p#resultados").html(mostrarImagen);
}

function inputEscrito(id){
    limpiar();
    let inputEscrito = $("#input"+id).attr("name");
    $("#pantalla").val(inputEscrito);
}
