
<!-- Validamos el formulario con PHP-->
<?php


if (isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['teleono'];
    $asunto=$_POST['asunto'];
    $correo=$_POST['email'];
    if (empty($nombre)){
        echo "<p class='error'> * Agrega tu nombre </p>";
    }
}


?>