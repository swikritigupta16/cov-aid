<?php
require("includes/connection.php");

// Redirects the user to stats page if user is logged in.
if (!isset($_SESSION['email'])) {
  header('location: index.php');
}
?>
<!DOCTYPE html
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <br><br><br><br>
        <div class="container">

    <form method="post" action="contact_script.php">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    
                    <h1> <b> Contact Us: </b> </h1><br>
                        <div class="form-group">

                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div> 
                        <div class="form-group">
                            <input type="number" class="form-control" name="contact" placeholder="Mobile Number" required>
                        </div> 
                        <div class="form-group">
                            <input type="text" class="form-control" name="requirement" placeholder="Requirement" required>
                        </div> 
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file">
                         <label class="custom-file-label" for="customFile">Kindly attach patient's report</label>
                        </div><br>

                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn  btn-primary">
                        </div>
                    </form>                   
                </div>
            </div>
      </form>
               </div>
  </body>
</html>