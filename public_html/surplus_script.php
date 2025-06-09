<?php

require("includes/connection.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $item_name = $_POST['item_name'];
  $item_name = strtolower($item_name);
  $item_name = mysqli_real_escape_string($con, $item_name);
  
    
  $status="available";
   
    $query = "INSERT INTO surplus(email, item_name, status)VALUES('" . $email . "','" . $item_name . "','" . $status . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: success.php');
?>

