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
        
<?php
$keyword="";
$searchErr="";
$errors=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST["search"]))	{
$searchErr = "Search is required";
$errors = 1;
} else {
$keyword = test_input($_POST["search"]);
$keyword = strtolower($keyword);
}
}
function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
}
?>

        
        
        <?php include 'includes/header.php'; ?>
            <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-2 col-md-6 col-md-offset-3">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <div class="form-inline">
                            <input type="text" class="form-control"  placeholder="Search for your need" name="search" required = "true">
                            
                            <input type="submit" name="submit" class="btn btn-success" value="Search">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
                <br><br><br>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-strip table-hover">
    
                        
                        <?php
                        if(isset($_POST['submit']) && ($errors == 0 ))
                        {

                            $query = "SELECT users.name, users.contact, users.address, users.landmark, surplus.item_name FROM users 
                            INNER JOIN surplus ON users.email=surplus.email where surplus.item_name LIKE '%$keyword%' and surplus.status='available'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                        ?>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Item Name</th>
                                    <th>Contact No.</th>
                                    <th>Address</th>
                                    <th>Landmark</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["item_name"] . "</td><td>" . $row["contact"] .
                                            "</td><td>" . $row["address"] . "</td><td>" . $row["landmark"] . "</td></tr>";
                                }
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "no results";
                        }
                        }
                       
                        ?>
                
                    </table>
                </div>
            </div>            
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
