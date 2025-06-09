<?php
require("includes/connection.php");

// Redirects the user to stats page if user is logged in.
if (!isset($_SESSION['email'])) {
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- google icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- external css -->
        <link rel="stylesheet" href="css/style.css">      
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-strip table-hover">
                
                        <?php
                        $email=$_SESSION['email'];
                        $email = mysqli_real_escape_string($con, $email);
                        $query = "SELECT item_name ,surplus_id FROM surplus where email= '$email'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                        ?>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>&nbsp</th>
                                    <th>&nbsp</th>                                 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    
                                    echo "<tr><td>" . $row["item_name"] . "</td><td>" .
                                            "<form action='listing_script.php' method='POST'>". "</td><td>". "<input type='hidden' name ='surplus_id' value='". $row["surplus_id"]."'> </td><td>"."<input type='submit' class='btn btn-danger' name ='delete' value=' Delete '></form>"  
                                            . "</td></tr>";
                                }
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<h3> No records available. Start contributing now by clicking <a href='surplus.php'>here</a>";
                        }
                        
                       
                        ?>
                
                    </table>
                </div>
            </div>            
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>


