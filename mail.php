<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $to = "contact@usedcalculators.co";
  $subject = "From Website Title";
  $emailcontent = "From: $name \n\n $message";
  $mailheader = "From: $email";
 
  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.html');
  header('Location: thank-you.html');
?>