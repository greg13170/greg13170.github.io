



<?php

$name = $_POST['name'];
$prenom = $_POST ['prenom'];
$visitor_email = $_POST['mail'];
$message = $_POST['message'];
$subject = $_POST['objet'];

$email_from = "$visitor_email";
$email_subject = "$subject";
$email_body = "Vous avez recu un message de $prenom. $name.\n".
                         "Voici son message:\n $message\n".


  $to = "gregory.lintz@yahoo.fr";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);


?>