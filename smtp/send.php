<?php
//$to = "dtejera@rootstack.com";
$to = "juan.barba.o@gmail.com";
$subject = $_POST['name'] . "Te envio un mensaje";
$email = "info@suhsiexpresspanama.com";
$message = $_POST['email'] . "<br>" . $_POST['message'];
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers) ;