

  <?php
$name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "sales@mnitsolutions.in";
  $subject = "New contact form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us!";
  } else {
    echo "Error sending email.";
  }
  ?>