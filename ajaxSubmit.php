<?php
// video PHP
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$comment .= "This message was sent by: " . $name . " \r\n";
$comment .= "The email is: " . $email . " \r\n";
$comment .= "The message is: ". $message ." \r\n";
$for = 'ianposton@sbcglobal.net';
$subject = 'Contact from website';
mail($for, $subject, utf8_decode($comment), $header);
// video validar
$name = $_POST['name'];
echo json_encode(array(
    'message' => sprintf('Your message has been received %s', $name),
));



