function escribe(n,n1){
v1=$("input#"+n).val();
$("input#"+n1).val(v1);
}
function mostrar(m){
$("#"+m).toggle(1200);
}
function variable(){
    $('button').each(function(index, value) {
        console.log(`button${index}: ${this.id}`);
      });
}