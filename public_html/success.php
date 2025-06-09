<?php

require("includes/connection.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
        <title>
           Cov-Aid
        </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="padding-top: 50px;">
       
    </head>
    <body>
         <?php
        include 'includes/header.php';
        ?>
        <br>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Thanks for making your contribution towards your community/society.</h3><hr>
                      <p align="center">Click <a href="surplus.php" style="color:blue">here</a> to make more contribution.</p>
                </div>
            </div>
        </div>

    </body>
</html>