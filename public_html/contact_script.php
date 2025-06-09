<?php

require("includes/connection.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $message = $_POST['requirement'];
  $message = mysqli_real_escape_string($con, $message);

  $file = $_POST['file'];
  $file = mysqli_real_escape_string($con, $file);
  
  $to="n2001ikhil@gmail.com";
  $from=$_SESSION['email'];
  $to="n2001ikhil@gmail.com";
  
  mail($to, $subject, $message);
  echo"mail sent successfully";


  ?>
