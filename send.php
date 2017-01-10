<?php

  $destiny = "johangonzalezpo@gmail.com";
  $name = $_Post["name"];
  $mail = $_Post["mail"];
  $message = $_Post["txtMessage"];

  $content = "Nombre: " .  $name . "\nMail: " . $mail . "\nMensaje" . $message;

  mail($destiny, "Contacto", $content);

  header("Location:thanks.html")


?>
