<?php
require("includes/connection.php");
$name = $_POST['name'] ;
$name = mysqli_real_escape_string($con, $name);

$phn_no = $_POST['contact'];
$phn_no = mysqli_real_escape_string($con, $phn_no);

$address = $_POST['address'];
$address = mysqli_real_escape_string($con, $address);

$landmark = $_POST['landmark'];
$landmark = mysqli_real_escape_string($con, $landmark);

$query = "UPDATE users SET name='$name',contact='$phn_no',address='$address',landmark= '$landmark'";

if(mysqli_query($con, $query))
{
	echo "<script>window.alert('Profile has been updated')</script>";
        header('location: stats.php');

} else
{
	echo "Error" . $query . "<br>" .  mysqli_error($con);
} 

?>

