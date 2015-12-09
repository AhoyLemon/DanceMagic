<?php 
  $studentname = $_POST['StudentName'];
  $birthday = $_POST['StudentBirthdate'];
  $contact = $_POST['ContactName'];
  $email = $_POST['ContactEmail'];
  $phone = $_POST['ContactPhone'];
  $address = $_POST['ContactStreetAddress'];
  $city = $_POST['ContactCity'];
  $state = $_POST['ContactState'];
  $zip = $_POST['ContactZIP'];

  $formcontent= "FREE CLASS SIGN UP \n
Student:
$studentname
Birthday:
$birthday

CONTACT:
$contact
Phone:
$phone
Email:
$email
Address:
$address
$city , $state $zip";
  $recipient = "info@dance-n-magic.com,citrusmirakel@gmail.com";
  $subject = "Free Class Signup";
  $mailheader = "From: info@dance-n-magic.com \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  header("Location: classes/free-class/success");
  die();
?>