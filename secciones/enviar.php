<?php

  $destino ="rodrioliva@hotmail.com";
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mensaje = $_POST["mensaje"];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
  mail($destino,"web pasion tricolor",$contenido);
  header("location:contacto.html");

    echo "mail enviado";

?>