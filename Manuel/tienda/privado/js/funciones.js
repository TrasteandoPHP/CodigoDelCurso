// Función para LOGIN
function login(){
    var email = $("#email").val(); 
    var pass = $("#pass").val(); 

    if(email=="" || pass==""){
        alert("No puedes dejar campos vacíos");        
    } else {
        $.post(
            "./sesion/php/login.php", 
            {mail:email, password:pass},
            function(resultadoPHP){               
                if(resultadoPHP=="bien"){
                    window.location.href="./sesion/index.php";
                } else { 
                    alert("Usuario o contraseña incorrecta");
                    $("#email").focus();
                }              
            }
        );        
    }
}
