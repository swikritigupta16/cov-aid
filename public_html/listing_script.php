<?php
require ('includes/connection.php');

$surplus_id= $_POST['surplus_id'];
$surplus_id = mysqli_real_escape_string($con, $surplus_id);

$query="DELETE FROM surplus WHERE surplus_id = '$surplus_id'";

    mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: listing.php');

?>
