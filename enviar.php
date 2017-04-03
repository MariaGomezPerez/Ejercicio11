<?php
    $destino="rperez@cobach.edu.mx";/*MGP*/ 
    $asunto = $_POST["asunto"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;
mail($destino,$asunto,$contenido); //enviar "Contacto"
header("Location:gracias.html");/*MGP*/
?>