<?php
$name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phoneNumber"];
  $bussiness = $_POST["bussiness"];
  $message = $_POST["message"];

  $to = "info@robowale.com";
  $subject = "new Message form Robowale";
  $body = "Name: $name\nEmail: $email\nPhone Number: $phone\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us!";
  } else {
    echo "Error sending email.";
  }
  ?>