


function validar(){
    var nick_user, password, expresion;
    nick_user=document.getElementById("user").value;
    password=document.getElementById("pass").value;

    /*expresion= /\w+@\w+\.+[a-z]/; // Para validar correo electrónico*/
    expresion= /\w+\w/;


    if (nick_user==="" ||password==="" ){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (nick_user.length>30 || nick_user.length<5) {
        alert("Ingrese nombre de usuario correcto");
        return false;
    }
    else if (password.length>13 || password.length<4 ){
        alert("Contraseña Incorrecta");
        return false;
    }
}

/*
function error () {
var nom_user, pass_user;
 if (nom)
    
}
*/