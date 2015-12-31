<?php 
  $email = $_POST['EmailAddress'];
  $phone = $_POST['ContactPhone'];
  $address = $_POST['ContactStreetAddress'];
  $city = $_POST['ContactCity'];
  $state = $_POST['ContactState'];
  $zip = $_POST['ContactZIP'];

  $formcontent= "MAILING LIST SIGN UP \n
Email:
$email";
  $recipient = "dancenmagic@gmail.com,citrusmirakel@gmail.com";
  $subject = "Free Class Signup";
  $mailheader = "From: dancenmagic@gmail.com \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  header("Location: blogs/mailing-list-success");
  die();
?>