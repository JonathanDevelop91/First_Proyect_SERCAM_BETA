<?php


$user=$_POST['user'];
$pass=$_POST['pass'];

//Connection to the database

include 'Connection.php';
$consulta="SELECT * FROM usuarios WHERE user='$user' and pass='$pass'";
$resultado=mysqli_query($conexion, $consulta);

//validamos los datos
$filas=mysqli_num_rows($resultado); //Mysqli_num_rows obtine informacion en la tabla de la base de datos y nos devuelve 1 si encontro la consulta o 0 si no existe.
if ($filas>0){
   /* header("location:bienvenidos.html");*/
    echo '<script>
    alert("Datos ingresados correcto");
    windows.history.go(-2);
    </script>
    ';
}
else {
    echo '<script>
    alert("Los datos ingresados son Incorrectos");
    windows.history.go(-1);
    </script>
    ';
}
mysqli_free_result($resultado); //Mysqli_free Libera espacio en la memoria porque resultado está ocupando memoria.
mysqli_close($conexion); // Cierra la consulta y libera recursos de memoria en procesamiento.
