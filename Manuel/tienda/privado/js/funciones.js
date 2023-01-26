// Función para LOGIN
function login(){
    var email = $("#email").val(); 
    var pass = $("#pass").val(); 

    if(email=="" || pass==""){
        alert("No puedes dejar campos vacíos");        
    } else {
        $.post(
            "./php/login.php", 
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

// Función para mostrar opciones del submenú
function mostrar(id){    
    $(".submenu-container").show();
    $(".options-container").hide()
    ocultar();         
    $("#"+id).show();  
}

// Función para ocultar opciones del submenú
function ocultar(){
    $("#altas").hide(); 
    $("#consultar").hide();
    $("#modificar").hide();
    $("#borrar").hide(); 
}  
