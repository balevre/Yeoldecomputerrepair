<?php

if (isset($_POST ['submit'])) {
  $name = $_POST ['name'];
  $mailfrom = $_POST ['email'];
  $message = $_POST ['message'];

  $mailTo = "balevre@icloud.com"
  $headers = "From: ".$mailFrom
  $txt = "You have recieved an email from ".$name.".\n\n".$message;

  mail($mailTo, $mailfrom, $message, $headers);
  header("Location: index,php?mailsend");
}

?>
