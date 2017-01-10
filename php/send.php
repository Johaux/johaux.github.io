<?php

  $destiny = "johangonzalezpo@gmail.com";
  $name = $_post["name"];
  $mail = $_post["mail"];
  $message = $_post["txtMessage"];

  $content = "Nombre: " .  $name . "\nMail: " . $mail . "\nMensaje" . $message;

  mail($destiny, "Contacto", $content);

  header("Location:thanks.html")


?>
