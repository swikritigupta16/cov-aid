<?php
require("includes/connection.php");

// Redirects the user to stats page if user is logged in.
if (!isset($_SESSION['email'])) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Donate</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- google icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- external css -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>Donate</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Enter details to make a contribution</i><p>
                                <form action="surplus_script.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="<?php echo "$_SESSION[email]"?>" name="email" required = "true" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name of the item you are willing to lend" name="item_name" required = "true">
                                    </div>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-success">Lend</button><br><br>
                                </form><br>
                            </div>
                            <div class="panel-footer"><p> See your contributions<a href="listing.php.php"> here </a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
