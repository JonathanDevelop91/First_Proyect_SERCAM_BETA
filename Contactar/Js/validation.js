

function validation(){
    var nombre, apellido, correo, telefono, asunto, mje , expresion;
    nombre=document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    correo=document.getElementById("email").value;
    telefono=document.getElementById("telefono").value;
    asunto=document.getElementById("asunto").value;
    mje=document.getElementById("msg").value;

    
    expresion= /\w+@\w+\.+[a-z]/;                                /*  Para validar correo electrónico   */


    if (nombre==="" ||apellido==="" || correo===""|| telefono===""|| asunto==="" || mje==="" ){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (nombre.length>10 || nombre.length<2) {
        alert("Nombre incorrecto");
        return false;
    }
    else if (apellido.length>10 || apellido.length<2) {
        alert("Apellido incorrecto");
        return false;
    }
    else if (correo.length>30 || correo.length<8) {
        alert("Correo electrónico incorrecto");
        return false;
    }
    else if (telefono.length>18 || telefono.length<5) {
        alert("Teléfono incorrecto");
        return false;
    }
    else if (asunto.length>15 || asunto.length<4 ){
        alert("Asunto de mensaje incoherente");
        return false;
    }
    else if (mje.length>225 ){
        alert("Mensaje demasiado extenso");
        return false;
    }
    else if (mje.length<4 ){
        alert("Mensaje Incoherente");
        return false;
    }
    /* Validacion de Formato de Teléfono */
    else if (isNaN(telefono)){
        alert("Formato de Telefono Incorrecto \n(Solo Nro)");
        return false;
    }
    /* Validación de Correo Electrónico con el formato de Expresion Regular establecida con la variable 'expresion'. */
    else if(!expresion.test(correo)){
        alert("Correo Electrónico Inválido");
        return false;
    }
}

