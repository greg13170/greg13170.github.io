



<?php
$prenom= $_POST ['prenom'];
$name = $_POST['nom'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['objet'];
$email_from = "$visitor_email";
$email_subject = "$subject";
$email_body = "Vous avez recu un message de $name.\n".
                         "Voici son message:\n $message\n".


  $to = "gregory.lintz@yahoo.fr";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);


?>