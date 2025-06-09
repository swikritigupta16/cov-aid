<?php
require("includes/connection.php");

// Redirects the user to stats page if user is logged in.
if (!isset($_SESSION['email'])) {
  header('location: stats.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
	<title>edit details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
$email=$_SESSION['email'];
$query= "SELECT name, contact, address, landmark FROM users WHERE email ='$email'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 0) 
  
  {
	die( "Error updating record: " . mysqli_error($con)) ;
  }
else
{
	$row = mysqli_fetch_assoc($result);
 		$name =$row["name"];	
 		$contact =$row["contact"];
 		$address =$row["address"];
 		$landmark =$row["landmark"];
 		
	}
?>
<body>
            <?php include 'includes/header.php'; ?>
    <br><br><br>
    <div class="container-fluid decor_bg">
    <form method="post" action="user_edit_details.php">
		<h2>Edit Details:</h2>
                <br><br>
     <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value = "<?php echo $name;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPhn_no" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-5">
            <input type="number" class="form-control" id="inputPhn_no" placeholder="Phone Number" name="contact"value = "<?php echo $contact;?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAddress" class="col-sm-2 col-form-label ">Address</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address" value = "<?php echo $address;?>">
        </div>
    </div>
     
    <div class="form-group row">
        <label for="inputLandmark" class="col-sm-2 col-form-label">Landmark </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputLandmark" placeholder="Landmark" name="landmark" value = "<?php echo $landmark;?>">
        </div>
    </div>
   
    <div class="form-group row">
        <div class="col-sm-10 text-CENTER">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
    </div>

    
</body>
</html>

